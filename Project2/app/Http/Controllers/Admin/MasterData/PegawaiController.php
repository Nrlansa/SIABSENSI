<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $admins = Pegawai::where('jabatan', 1)->get();
        $dosens = Pegawai::where('jabatan', 2)->get();
        $teknisis= Pegawai::where('jabatan', 3)->get();
        
        return view('admin.master-data.pegawai.index', compact('admins','dosens','teknisis'));
    }

    public function create(){


        return view('admin.master-data.pegawai.create');
    }

    public function store(Request $request)
    {
        $rules =[
            'nama' =>'required',
            'jabatan' => 'required',
            'password' => 'required',
        ];
        $massages =[
            'required' => ':attribute wajib diisi',
        ];

        $this->validate($request, $rules, $massages);
        $pegawai = new Pegawai;
        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->nik = request('nik');
        $pegawai->jabatan = request('jabatan');
        $pegawai->email = request('email');
        if(request('password')) $pegawai->password = request('password');

        $pegawai->save();
        return redirect('admin/master-data/pegawai')-> with('success','Data berhasil Ditambahkan');
    }

    public function Show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.show', $data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.edit', $data);
    }

    public function update(Pegawai $pegawai)
    {

        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->nik = request('nik');
        $pegawai->jabatan = request('jabatan');
        $pegawai->email = request('email');
        $pegawai->password = request('password');

        $pegawai->save();
        return redirect('admin/master-data/pegawai')-> with('success','Data berhasil Diedit');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect('admin/master-data/pegawai')->with('success','Data Berhasil Dihapus');

    }

}