<x-module.admin>

    <style>
        .tableme {
            width: 100%;
            border-collapse: collapse;

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
            <div class="col-md-12 mt-3">
                <div class="card ">
                    <div class="card-header">
                        <div class="float-right">

                        </div>
                        <div class="card-title">
                            <h5 class="mx-4 pt-2">Data Absensi</h5>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        </div>
                    </div>

                    <div class="card-body">
                        <div style="overflow-x: auto;">
                            <table id="datatablesSimple">
                                <thead class="bg-primary text-white">
                                    <th>NO</th>
                                    <th width="100px">Aksi</th>
                                    <th>Kelas</th>
                                    <th>Semester</th>
                                    <th> Jumlah Anggota</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_kelas as $kelas)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="{{ url("lihat-absensi/$kelas->id") }}"
                                                        class="btn btn-primary"><span class="fa fa-info"></span>
                                                        Lihat</a>
                                                </div>
                                            </td>
                                            <td>{{ $kelas->semester->semester }} {{ $kelas->nama }}</td>
                                            <td>{{ $kelas->semester->semester }}</td>
                                            <td>{{ $kelas->anggota->count() }}</td>

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
</x-module.admin>
