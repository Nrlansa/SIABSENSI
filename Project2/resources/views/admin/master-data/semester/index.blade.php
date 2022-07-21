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
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <div class="float-right">
                            <a href="{{ url('admin/master-data/semester/create') }}"
                                class="float-end btn btn-primary mt-2 mb-2 mx-3"><i class="fa fa-plus mx-1"></i>Tambah
                                Data</a>
                        </div>
                        <div class="card-title">
                            <h5 class="mx-2 pt-2">Data Semester</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div style="overflow-x: auto;">
                            <table class="tableme table-bordered">
                                <thead class="bg-primary text-white">

                                    <th>NO</th>
                                    <th width="100px">Aksi</th>
                                    <th>Tahun Ajar</th>
                                    <th>Semester</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_semester as $semester)
                                        <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-template.button.delete-button url="admin/master-data/semester"
                                                        id="{{ $semester->id }}" />
                                                    <x-template.button.edit-button url="admin/master-data/semester"
                                                        id="{{ $semester->id }}" />
                                                </div>
                                            </td>
                                            <td>{{ $semester->tahun_ajar }}</td>
                                            <td>{{ $semester->semester }}</td>
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
