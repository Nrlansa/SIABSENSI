<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use Illuminate\Http\Request;

class IzinController extends Controller
{
    public function store()
    {
        $izin = new Izin();
        $izin->id_mahasiswa = request('id_mahasiswa');
        $izin->id_kelas = request('id_kelas');
        $izin->keterangan = request('keterangan');
        $izin->handleUploadFile();
        $izin->save();

        return redirect('admin/master-data/kelas')->with('success', 'Data Berhasil Ditambahkan');
    }
}