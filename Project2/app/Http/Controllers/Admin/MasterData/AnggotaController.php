<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Anggota;
use App\Models\Admin\MasterData\KelasRf;

class AnggotaController extends Controller
{

    public function store()
    {
        $anggota = new Anggota;
        $anggota->id_mahasiswa = request('id_mahasiswa');
        $anggota->save();

        return redirect('admin/master-data/mahasiswa')->with('success', 'Data Berhasil Ditambahkan');
    }


    public function storeKelas()
    {
        foreach (request('mahasiswa') as $id_mahasiswa => $value) {
            $anggota = new Anggota;
            $anggota->id_mahasiswa = $id_mahasiswa;
            $anggota->id_kelas = request('id_kelas');
            $anggota->save();
        }


        return redirect('admin/master-data/kelas')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function update(Anggota $anggota)
    {
        $anggota->id = request('id');

        $anggota->save();


        return redirect('admin.master-data.kelas')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy(Anggota $anggota)
    {
        $anggota->delete();
        return back()->with('success', 'Data Berhasil Dihapus');
    }
}