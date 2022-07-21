<?php

namespace App\Http\Controllers\Admin\Masterdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\MasterData\Ruangan;

class RuanganController extends Controller
{
    public function index()
    {
        $data['list_ruangan'] = Ruangan::all();
        return view('admin.master-data.ruangan.index', $data);
    }

    public function create()
    {
        return view('admin.master-data.ruangan.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'kode_ruangan' => 'required',
            'nama_ruangan' => 'required',
            'jenis_ruangan' => 'required',
            'kapasitas_ruangan' => 'required',
        ];
        $massages = [
            'required' => ':attribute wajib diisi',
        ];

        $this->validate($request, $rules, $massages);
        $ruangan = new Ruangan;
        $ruangan->kode_ruangan = request('kode_ruangan');
        $ruangan->nama_ruangan = request('nama_ruangan');
        $ruangan->kapasitas_ruangan = request('kapasitas_ruangan');
        $ruangan->jenis_ruangan = request('jenis_ruangan');
        $ruangan->save();

        return redirect('admin/master-data/ruangan')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Ruangan $ruangan)
    {
        $data['ruangan'] = $ruangan;
        return view('admin.master-data.ruangan.show', $data);
    }

    public function edit(Ruangan $ruangan)
    {
        $data['ruangan'] = $ruangan;
        return view('admin.master-data.ruangan.edit', $data);
    }

    public function update(Ruangan $ruangan)
    {
        $ruangan->kode_ruangan = request('kode_ruangan');
        $ruangan->nama_ruangan = request('nama_ruangan');
        $ruangan->kapasitas_ruangan = request('kapasitas_ruangan');
        $ruangan->jenis_ruangan = request('jenis_ruangan');
        $ruangan->save();

        return redirect('admin/master-data/ruangan')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy(Ruangan $ruangan)
    {
        $ruangan->delete();
        return redirect('admin/master-data/ruangan')->with('success', 'Data Berhasil Dihapus');
    }
}