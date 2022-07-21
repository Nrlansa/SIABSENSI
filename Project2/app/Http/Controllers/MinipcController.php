<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use App\Models\Absensi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Mahasiswa;

class MinipcController extends Controller
{

    public function multimedia()
    {
        return view('mini-pc.multimedia');
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

        if (!$absensi) {
            // if (date("H") >= $jam_masuk_awal && date("H") <= $jam_masuk_akhir) {
            $izin = Izin::whereDate('created_at', date("Y-m-d"))->first();
            if ($izin) return back()->with('danger', 'Anda dinyatakan izin');

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
    public function Rpl()
    {
        return view('mini-pc.Rpl');
    }


    public function Pbl1()
    {
        return view('mini-pc.pbl1');
    }


    public function Pbl2()
    {
        return view('mini-pc.pbl1');
    }

    public function Program()
    {
        return view('mini-pc.pbl1');
    }
}