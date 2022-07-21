<x-module.admin>
    <style>
        .tableme {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #000000;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        th {
            text-align: center
        }

        td {
            text-align: center
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card  ">
                    <div class="card-header">
                        <div class="float-right">
                            <a href="{{ url('admin/master-data/matakuliah/create') }}"
                                class="float-end btn btn-primary mt-2 mb-2 mx-3"><i class="fa fa-plus mx-1"></i>Tambah
                                Data</a>
                        </div>
                        <div class="card-title">
                            <h5 class="mx-4 pt-2">Data Mata Kuliah</h5>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        </div>
                    </div>
                    <!--------semester 1------->
                    <div class="card-group pt-2">
                        <div class="card ms-2 "style="border: 1px solid #000000;">
                            <div class="card-header bg-transparent border-dark">
                                <h3>Semester 1</h3>
                            </div>
                            <div class="card-body">
                                <div style="overflow-x: auto;">
                                    <table class="tableme table-bordered">
                                        <thead class="bg-primary text-white">
                                            <th>No</th>
                                            <th width="100px">Aksi</th>
                                            <th>Kode Matakuliah</th>
                                            <th>Nama Matakuliah</th>
                                            <th>SKS</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($firstSemester as $matakuliah)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="btn-group">

                                                            <x-template.button.delete-button
                                                                url="admin/master-data/matakuliah"
                                                                id="{{ $matakuliah->id }}" />
                                                        </div>

                                                    </td>
                                                    <td>{{ $matakuliah->kode_makul }}</td>
                                                    <td>{{ $matakuliah->nama_makul }}</td>
                                                    <td>{{ $matakuliah->sks }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!----------semester 2------------>
                        <div class="card mx-2" style="border: 1px solid #000000;">
                            <div class="card-header bg-transparent border-dark">
                                <h3>Semester 2</h3>
                            </div>
                            <div class="card-body">
                                <div style="overflow-x: auto;">
                                    <table class="tableme table-bordered">
                                        <thead class="bg-primary text-white">
                                            <th>No</th>
                                            <th width="100px">Aksi</th>
                                            <th>Kode Matakuliah</th>
                                            <th>Nama Matakuliah</th>
                                            <th>SKS</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($secondSemester as $matakuliah)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="btn-group">

                                                            <x-template.button.delete-button
                                                                url="admin/master-data/matakuliah"
                                                                id="{{ $matakuliah->id }}" />
                                                        </div>

                                                    </td>
                                                    <td>{{ $matakuliah->kode_makul }}</td>
                                                    <td>{{ $matakuliah->nama_makul }}</td>
                                                    <td>{{ $matakuliah->sks }}</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------semester 3------------>
                    <div class="card-group pt-2 ">
                        <div class="card ms-2 "style="border: 1px solid #000000;">
                            <div class="card-header bg-transparent border-dark">
                                <h3>Semester 3</h3>
                            </div>
                            <div class="card-body">
                                <div style="overflow-x: auto;">
                                    <table class="tableme table-bordered">
                                        <thead class="bg-primary text-white">
                                            <th>No</th>
                                            <th width="100px">Aksi</th>
                                            <th>Kode Matakuliah</th>
                                            <th>Nama Matakuliah</th>
                                            <th>SKS</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($thirdSemester as $matakuliah)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <x-template.button.delete-button
                                                                url="admin/master-data/matakuliah"
                                                                id="{{ $matakuliah->id }}" />
                                                        </div>

                                                    </td>
                                                    <td>{{ $matakuliah->kode_makul }}</td>
                                                    <td>{{ $matakuliah->nama_makul }}</td>
                                                    <td>{{ $matakuliah->sks }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!----------semester 4------------>
                        <div class="card mx-2" style="border: 1px solid #000000;">
                            <div class="card-header bg-transparent border-dark">
                                <h3>Semester 4</h3>
                            </div>
                            <div class="card-body">
                                <div style="overflow-x: auto;">
                                    <table class="tableme table-bordered">
                                        <thead class="bg-primary text-white">
                                            <th>No</th>
                                            <th width="100px">Aksi</th>
                                            <th>Kode Matakuliah</th>
                                            <th>Nama Matakuliah</th>
                                            <th>SKS</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($fourthSemester as $matakuliah)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="btn-group">

                                                            <x-template.button.delete-button
                                                                url="admin/master-data/matakuliah"
                                                                id="{{ $matakuliah->id }}" />
                                                        </div>

                                                    </td>
                                                    <td>{{ $matakuliah->kode_makul }}</td>
                                                    <td>{{ $matakuliah->nama_makul }}</td>
                                                    <td>{{ $matakuliah->sks }}</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----------semester 5------------>
                    <div class="card-group pt-2 ">
                        <div class="card ms-2 "style="border: 1px solid #000000;">
                            <div class="card-header bg-transparent border-dark">
                                <h3>Semester 5</h3>
                            </div>
                            <div class="card-body">
                                <div style="overflow-x: auto;">
                                    <table class="tableme table-bordered">
                                        <thead class="bg-primary text-white">
                                            <th>No</th>
                                            <th width="100px">Aksi</th>
                                            <th>Kode Matakuliah</th>
                                            <th>Nama Matakuliah</th>
                                            <th>SKS</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($fifthSemester as $matakuliah)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <x-template.button.delete-button
                                                                url="admin/master-data/matakuliah"
                                                                id="{{ $matakuliah->id }}" />
                                                        </div>

                                                    </td>
                                                    <td>{{ $matakuliah->kode_makul }}</td>
                                                    <td>{{ $matakuliah->nama_makul }}</td>
                                                    <td>{{ $matakuliah->sks }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!----------semester 6------------>
                        <div class="card mx-2" style="border: 1px solid #000000;">
                            <div class="card-header bg-transparent border-dark">
                                <h3>Semester 6</h3>
                            </div>
                            <div class="card-body">
                                <div style="overflow-x: auto;">
                                    <table class="tableme table-bordered">
                                        <thead class="bg-primary text-white">
                                            <th>No</th>
                                            <th width="100px">Aksi</th>
                                            <th>Kode Matakuliah</th>
                                            <th>Nama Matakuliah</th>
                                            <th>SKS</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($sixthSemester as $matakuliah)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="btn-group">

                                                            <x-template.button.delete-button
                                                                url="admin/master-data/matakuliah"
                                                                id="{{ $matakuliah->id }}" />
                                                        </div>

                                                    </td>
                                                    <td>{{ $matakuliah->kode_makul }}</td>
                                                    <td>{{ $matakuliah->nama_makul }}</td>
                                                    <td>{{ $matakuliah->sks }}</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
