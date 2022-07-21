<?php

namespace App\Http\Controllers\Admin\Masterdata;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\MasterData\Matakuliah;

class MatakuliahController extends Controller
{
    public function index()
    {
        $firstSemester = Matakuliah::where('semester', 1)->get();
        $secondSemester = Matakuliah::where('semester', 2)->get();
        $thirdSemester = Matakuliah::where('semester', 3)->get();
        $fourthSemester = Matakuliah::where('semester', 4)->get();
        $fifthSemester = Matakuliah::where('semester', 5)->get();
        $sixthSemester = Matakuliah::where('semester', 6)->get();


        return view(
            'admin.master-data.matakuliah.index',
            compact('firstSemester', 'secondSemester', 'thirdSemester', 'fourthSemester', 'fifthSemester', 'sixthSemester')
        );
    }

    public function create()
    {
        return view('admin.master-data.matakuliah.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'kode_makul' => 'required',
            'nama_makul' => 'required',
            'sks' => 'required',
            'semester' => 'required',
        ];
        $massages = [
            'required' => ':attribute wajib diisi',
        ];

        $this->validate($request, $rules, $massages);

        $matakuliah = new Matakuliah;
        $matakuliah->kode_makul = request('kode_makul');
        $matakuliah->nama_makul = request('nama_makul');
        $matakuliah->sks = request('sks');
        $matakuliah->semester = request('semester');
        $matakuliah->save();

        return redirect('admin/master-data/matakuliah')->with('success', 'Data Berhasil Ditambah');
    }

    public function show()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy(Matakuliah $matakuliah)
    {
        $matakuliah->delete();
        return redirect('admin/master-data/matakuliah')->with('success', 'Data Berhasil Dihapus');
    }
}