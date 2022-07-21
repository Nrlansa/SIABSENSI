<?php

namespace App\Http\Controllers\Admin\MasterData;

use Illuminate\Http\Request;
use App\Imports\MahasiswaImport;
use App\Http\Controllers\Controller;

use Maatwebsite\Excel\Facades\Excel;
use App\Models\Admin\MasterData\Kelas;
use Illuminate\Support\Facades\Storage;
use App\Models\Admin\MasterData\Anggota;
use App\Models\Admin\MasterData\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {


        $data['list_mahasiswa'] = $list_mahasiswa = Mahasiswa::all();
        $data['list_mahasiswa'] = $list_mahasiswa = Mahasiswa::orderBy('angkatan', 'desc')->get();

        $data['list_anggota'] = Anggota::all();
        $list_anggota = [];
        foreach ($list_mahasiswa as $mahasiswa) {
            foreach ($mahasiswa->anggota as $anggota) {
                $list_anggota[] = $anggota->id_mahasiswa;
            }
        }
        $data['list_anggota'] = $list_anggota;

        return view('admin.master-data.Mahasiswa.index', $data);
    }

    public function create()
    {
        $data['list_kelas'] = Kelas::all();
        return view('admin.master-data.Mahasiswa.create', $data);
    }

    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = $file->hashName();

        //temporary file
        $path = $file->storeAs('public/excel', $nama_file);
        // import data
        $filepath = public_path('app/public/excel/' . $nama_file);
        $import = Excel::import(new MahasiswaImport(), $filepath);

        //remove from server
        Storage::delete($path);

        if ($import) {
            //redirect
            return redirect('admin/master-data/mahasiswa')->with(['success' => 'Data Berhasil Diimport!']);
        }
    }

    public function store(Request $request)
    {
        $rules = [
            'nim' => 'required',
            'nama' => 'required',
            'angkatan' => 'required',
            'password' => 'required',
        ];
        $massages = [
            'required' => ':attribute wajib diisi',
        ];

        $this->validate($request, $rules, $massages);

        $mahasiswa = new Mahasiswa;
        $mahasiswa->angkatan = request('angkatan');
        $mahasiswa->nim = request('nim');
        if (request('password')) $mahasiswa->password = request('password');
        $mahasiswa->nama = request('nama');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->agama = request('agama');
        $mahasiswa->no_hp = request('no_hp');
        $mahasiswa->email = request('email');
        $mahasiswa->alamat = request('alamat');

        $mahasiswa->save();

        return redirect('admin/master-data/mahasiswa')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Mahasiswa $mahasiswa)
    {
        $data['mahasiswa'] = $mahasiswa;
        return view('admin.master-data.Mahasiswa.show', $data);
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $data['mahasiswa'] = $mahasiswa;
        return view('admin.master-data.Mahasiswa.edit', $data);
    }

    public function update(Mahasiswa $mahasiswa)
    {

        $mahasiswa->angkatan = request('angkatan');
        $mahasiswa->nim = request('nim');
        $mahasiswa->password = request('password');
        $mahasiswa->nama = request('nama');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->agama = request('agama');
        $mahasiswa->no_hp = request('no_hp');
        $mahasiswa->email = request('email');
        $mahasiswa->alamat = request('alamat');
        $mahasiswa->save();

        return redirect('admin/master-data/mahasiswa')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('admin/master-data/mahasiswa')->with('success', 'Data Berhasil Dihapus');
    }
}