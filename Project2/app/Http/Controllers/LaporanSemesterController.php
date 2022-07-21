<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Izin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Admin\MasterData\Kelas;

class LaporanSemesterController extends Controller
{
    function index()
    {
        $data['list_kelas'] = Kelas::all();
        return view('admin.laporan.semester', $data);
    }

    function store()
    {
        $data['bulan_awal'] = $bulan_awal = request('bulan_awal');
        $data['bulan_akhir'] = $bulan_akhir = request('bulan_akhir');
        $data['tahun_awal'] = $tahun_awal = request('tahun_awal');
        $data['tahun_akhir'] = $tahun_akhir = request('tahun_akhir');
        $date1 = Carbon::create($tahun_awal, $bulan_awal, 1);
        $date2 = Carbon::create($tahun_akhir, $bulan_akhir)->endOfMonth();

        $weekday = $date1->diffInDaysFiltered(function (Carbon $date) {
            return $date->isWeekday();
        }, $date2);

        $data['jumlah_hari_aktif'] = $weekday;

        $kelas = Kelas::find(request('id_kelas'));
        $data['tanggal_mulai'] = $tanggal_mulai = $date1->format("Y-m-d");
        $data['tanggal_selesai'] = $tanggal_selesai = $date2->format("Y-m-d");
        $list_anggota = $kelas->anggota;
        $list_absen = Absensi::whereBetween('created_at', [$tanggal_mulai, $tanggal_selesai]);
        $list_mahasiswa = $list_anggota->map(function ($item) use ($tanggal_mulai, $tanggal_selesai, $weekday, $list_absen) {
            $mahasiswa = $item->mahasiswa;
            $mahasiswa->jumlah_absen = $this->getJumlahHadir($mahasiswa->id, $tanggal_mulai, $tanggal_selesai, $list_absen);
            $mahasiswa->persentase_kehadiran = number_format($mahasiswa->jumlah_absen / $weekday * 100, 2);
            return $mahasiswa;
        });

        $data['list_mahasiswa'] = $list_mahasiswa;
        $data['bulan'] = strftime("%B", time());
        $data['id_kelas'] = $kelas->id;
        $data['list_sakit'] = Izin::where('keterangan', 'Sakit')->whereBetween('created_at', [$date1->format('Y-m-d'), $date2->format('Y-m-d')])->get();
        $data['list_izin'] = Izin::where('keterangan', 'Izin')->whereBetween('created_at', [$date1->format('Y-m-d'), $date2->format('Y-m-d')])->get();
        return view('admin.laporan.semester-show', $data);
    }

    public function getJumlahHadir($id_mahasiswa, $tanggal_mulai, $tanggal_selesai, $list_absen)
    {
        return $list_absen->where('id_mahasiswa', $id_mahasiswa)->count();
    }
}