<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Mahasiswa;


class BaseMahasiswaController extends Controller
{

    public function profile()
    {
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        return view('mahasiswa.profile', $data);
    }


    public function edit(Mahasiswa $mahasiswa)
    {

        $data['mahasiswa'] = $mahasiswa;
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        return view('mahasiswa.edit', $data);
    }

    public function update(Mahasiswa $mahasiswa)
    {
        $mahasiswa->password = request('password');
        $mahasiswa->save();
        return redirect('mahasiswa/profile')->with('success', 'Data Berhasil Diedit');
    }
}