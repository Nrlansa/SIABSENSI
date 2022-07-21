<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Kelas;
use App\Models\Admin\MasterData\Anggota;
use App\Models\Admin\MasterData\KelasRf;
use App\Models\Admin\MasterData\Semester;
use App\Models\Admin\MasterData\Mahasiswa;
use Illuminate\Http\Request;


class KelasController extends Controller
{
    public function index(Request $request)
    {
        $data['list_kelas'] = $list_kelas = Kelas::all();

        $data['list_mahasiswa'] = Mahasiswa::all();
        $data['list_mahasiswa'] = $list_mahasiswa = Mahasiswa::orderBy('angkatan', 'desc')->get();

        $list_anggota = [];

        foreach ($list_kelas as $kelas) {
            foreach ($kelas->anggota as $anggota) {
                $list_anggota[] = $anggota->id_mahasiswa;
            }
        }
        $data['list_anggota'] = $list_anggota;


        return view('admin.master-data.Kelas.index', $data);
    }

    public function create()
    {
        $data['list_semester'] = Semester::all();
        return view('admin.master-data.Kelas.create', $data);
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
        ];
        $massages = [
            'required' => ':attribute wajib diisi',
        ];

        $this->validate($request, $rules, $massages);
        $kelas = new Kelas;
        $kelas->nama = request('nama');
        $kelas->id_semester = request('id_semester');


        $kelas->save();

        return redirect('admin/master-data/kelas')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Kelas $kela)
    {
        $data['kelas'] = $kela;
        $data['list_anggota'] = $kela->anggota;
        return view('admin.master-data.Kelas.show', $data);
    }

    public function edit(Kelas $kela)
    {
        $data['Kelas'] = $kela;
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('admin.master-data.kelas.edit', $data);
    }

    public function update(Kelas $kela)
    {
        $kela->nama = request('nama');
        $kela->id_semester = request('id_semester');


        $kela->save();


        return redirect('admin/master-data/kelas')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy(Kelas $kela)
    {
        $kela->delete();
        return redirect('admin/master-data/kelas')->with('success', 'Data Berhasil Dihapus');
    }
}