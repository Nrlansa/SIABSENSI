<?php

namespace App\Http\Controllers\Admin\MasterData;



use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function index()
    {

        $data['list_semester'] = Semester::all();

        // $data['list_mahasiswa'] = Mahasiswa::all();
        return view('admin.master-data.semester.index', $data);
    }

    public function create()
    {
        return view('admin.master-data.semester.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'tahun_ajar' => 'required',
            'semester' => 'required',
        ];
        $massages = [
            'required' => ':attribute wajib diisi',
        ];

        $this->validate($request, $rules, $massages);
        $semester = new Semester;
        $semester->tahun_ajar = request('tahun_ajar');
        $semester->semester = request('semester');

        $semester->save();

        return redirect('admin/master-data/semester')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function show(Semester $semester)
    {
        $data['semester'] = $semester;
        return view('admin.master-data.semester.show', $data);
    }

    public function edit(Semester $semester)
    {
        $data['semester'] = $semester;
        return view('admin.master-data.semester.edit', $data);
    }

    public function update(Semester $semester)
    {
        $semester->tahun_ajar = request('tahun_ajar');
        $semester->semester = request('semester');

        $semester->save();

        return redirect('admin/master-data/semester')->with('success', 'Data Berhasil Diedit');
    }

    public function destroy(Semester $semester)
    {
        $semester->delete();
        return redirect('admin/master-data/semester')->with('success', 'Data Berhasil Dihapus');
    }
}