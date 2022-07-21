<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Models\Absensi;
use App\Models\Izin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Kelas;
use App\Models\Admin\MasterData\Anggota;
use App\Models\Admin\MasterData\Mahasiswa;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    public function __invoke()
    {
        return view('admin.absensi.absensi');
    }

    public function store()
    {
        // $jam_masuk_awal = 15;
        // $jam_masuk_akhir = 16;

        // $jam_pulang_awal = 12;
        // $jam_pulang_akhir = 15;
        $mahasiswa = Mahasiswa::where('nim', request('nim'))->first();
        if (!$mahasiswa) return back()->with('danger', 'Cek kembali QR code anda');

        $absensi = Absensi::where('id_mahasiswa', $mahasiswa->id)
            // ->where('id_ruangan', request('id_ruangan'))
            ->whereDate('created_at', date("Y-m-d"))
            ->first();



        dd($absensi);
        if (!$absensi) {

            $izin = Izin::whereDate('created_at', date("Y-m-d"))->first();
            if ($izin) return back()->with('danger', 'Anda dinyatakan izin');

            // if (date("H") >= $jam_masuk_awal && date("H") <= $jam_masuk_akhir) {
            $absensi = new Absensi;
            $absensi->id_ruangan = request('id_ruangan');
            $absensi->id_mahasiswa = $mahasiswa->id;
            $absensi->absen_pagi = date("H:i");
            $absensi->save();
            // } else {
            //     return back()->with('danger', 'Absen Diluar Waktu');
            // }
        } else {
            // if (date("H") >= $jam_pulang_awal && date("H") <= $jam_pulang_akhir) {
            $absensi->absen_sore = date("H:i");
            $absensi->save();
            // } else {
            //     return back()->with('danger', 'Absen Diluar Waktu');
            // }
        }

        // if($absensi) return back()->with('danger', 'Woy '.$mahasiswa->nama.', dak e dah absen am');

        return back()->with('success', 'Terima kasih ' . $mahasiswa->nama . ' Telah Melakukan Absensi, Tetap Semangat ya!!!');
    }


    // public function list()
    // {

    //     $data['tanggal_mulai'] = $tanggal_mulai = '2022-07-01';
    //     $data['tanggal_selesai'] = $tanggal_selesai = '2022-07-31';
    //     $kelas = Kelas::find('96a8a3a8-7681-4e28-a627-945518bc7c86');
    //     $list_anggota = $kelas->anggota;
    //     $list_mahasiswa = $list_anggota->map(function ($item) use ($tanggal_mulai, $tanggal_selesai) {
    //         $mahasiswa = $item->mahasiswa;
    //         $mahasiswa->jumlah_absen = $this->getJumlahHadir($mahasiswa->id, $tanggal_mulai, $tanggal_selesai);

    //         return $mahasiswa;
    //     });

    //     $data['list_mahasiswa'] = $list_mahasiswa;
    //     $data['bulan'] = strftime("%B", time());

    //     $data['list_izin'] = Izin::all();

    //     return view('admin.absensi.list', $data);
    // }


    public function getJumlahHadir($id_mahasiswa, $tanggal_mulai, $tanggal_selesai)
    {
        return Absensi::where('id_mahasiswa', $id_mahasiswa)
            ->whereBetween('created_at', [$tanggal_mulai, $tanggal_selesai])
            ->count();
    }

    public function index()
    {
        $data['list_kelas'] = Kelas::all();
        return view('admin.absensi.index', $data);
    }

    public function detail(Kelas $kela)
    {

        $data['bulan_selected'] = $bulan = request('bulan') ?? date("m");
        $data['tahun_selected'] = $tahun = request('tahun') ?? date("y");

        $carbon = Carbon::create($tahun, $bulan);
        $date1 = Carbon::create($tahun, $bulan, 1);
        $date2 = Carbon::create($tahun, $bulan, $carbon->daysInMonth);


        $weekday = $date1->diffInDaysFiltered(function (Carbon $date) {
            return $date->isWeekday();
        }, $date2);

        $data['jumlah_hari_aktif'] = $weekday;

        $data['tanggal_mulai'] = $tanggal_mulai = $date1->format("Y-m-d");
        $data['tanggal_selesai'] = $tanggal_selesai = $date2->format("Y-m-d");
        $kelas = Kelas::find('id');
        $list_anggota = $kela->anggota;
        $list_mahasiswa = $list_anggota->map(function ($item) use ($tanggal_mulai, $tanggal_selesai, $weekday) {
            $mahasiswa = $item->mahasiswa;
            $mahasiswa->jumlah_absen = $this->getJumlahHadir($mahasiswa->id, $tanggal_mulai, $tanggal_selesai);
            $mahasiswa->persentase_kehadiran = number_format($mahasiswa->jumlah_absen / $weekday * 100, 2);
            return $mahasiswa;
        });

        $data['list_mahasiswa'] = $list_mahasiswa;
        $data['bulan'] = strftime("%B", time());
        $data['id_kelas'] = $kela->id;
        $data['list_sakit'] = Izin::where('keterangan', 'sakit')->whereBetween('created_at', [$date1->format('Y-m-d'), $date2->format('Y-m-d')])->get();
        $data['list_izin'] = Izin::where('keterangan', 'izin')->whereBetween('created_at', [$date1->format('Y-m-d'), $date2->format('Y-m-d')])->get();
        return view('admin.absensi.show', $data);
    }
}