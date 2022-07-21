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
                            <a href="{{ url('admin/master-data/ruangan/create') }}"
                                class="float-end btn btn-primary mt-2 mb-2 mx-3"><i class="fa fa-plus mx-1"></i>Tambah
                                Data</a>
                        </div>
                        <div class="card-title">
                            <h5 class="mx-4 pt-2">Data Ruangan</h5>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        </div>
                    </div>

                    <div class="card-body">
                        <div style="overflow-x: auto;">
                            <table class="tableme table-bordered">
                                <thead class="bg-primary text-white">
                                    <th>NO</th>
                                    <th width="100px">Aksi</th>
                                    <th>Kode Ruangan</th>
                                    <th>Nama Ruangan</th>
                                    <th>Kapasitas Ruangan</th>
                                    <th>Jenis Ruangan</th>


                                </thead>
                                <tbody>
                                    @foreach ($list_ruangan as $ruangan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <x-template.button.info-button url="admin/master-data/ruangan"
                                                        id="{{ $ruangan->id }}" />
                                                    <x-template.button.edit-button url="admin/master-data/ruangan"
                                                        id="{{ $ruangan->id }}" />
                                                    <x-template.button.delete-button url="admin/master-data/ruangan"
                                                        id="{{ $ruangan->id }}" />

                                            </td>
                                            <td>{{ $ruangan->kode_ruangan }}</td>
                                            <td>{{ $ruangan->nama_ruangan }}</td>
                                            <td>{{ $ruangan->kapasitas_ruangan }}</td>
                                            <td>{{ $ruangan->jenis_ruangan }}</td>
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
