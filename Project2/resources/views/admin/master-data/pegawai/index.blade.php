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
                <div class="card ">
                    <div class="card-header">
                        <div class="float-right">
                            <a href="{{ url('admin/master-data/pegawai/create') }}"
                                class="float-end btn btn-primary mt-2 mb-2 mx-3"><i class="fa fa-plus mx-1"></i>Tambah
                                Data</a>
                        </div>
                        <div class="card-title">
                            <h5 class="mx-4 pt-2">Data Pegawai</h5>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        </div>
                    </div>


                    <div class="card ms-2 mt-3 "style="border: 1px solid #000000;">
                        <div class="card-header bg-transparent border-dark">
                            <h3>Admin</h3>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="tableme table-bordered">
                                    <thead class="bg-primary text-white">
                                        <th>NO</th>
                                        <th width="100px">Aksi</th>
                                        <th>NIP/NIK</th>
                                        <th>Nama</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($admins as $pegawai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <x-template.button.info-button url="admin/master-data/pegawai"
                                                            id="{{ $pegawai->id }}" />
                                                        <x-template.button.edit-button url="admin/master-data/pegawai"
                                                            id="{{ $pegawai->id }}" />
                                                        <x-template.button.delete-button url="admin/master-data/pegawai"
                                                            id="{{ $pegawai->id }}" />
                                                    </div>

                                                </td>
                                                <td>
                                                    @if ($pegawai->nip && $pegawai->nik)
                                                        {{ $pegawai->nik }}/ {{ $pegawai->nip }}
                                                    @elseif($pegawai->nik)
                                                        {{ $pegawai->nik }}
                                                    @elseif($pegawai->nip)
                                                        {{ $pegawai->nip }}
                                                    @endif
                                                </td>
                                                <td>{{ $pegawai->nama }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!----------dosen------------>
                    <div class="card ms-2 mt-3" style="border: 1px solid #000000;">
                        <div class="card-header bg-transparent border-dark">
                            <h3>Dosen</h3>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="tableme table-bordered">
                                    <thead class="bg-primary text-white">
                                        <th>NO</th>
                                        <th width="100px">Aksi</th>
                                        <th>NIP/NIK</th>
                                        <th>Nama</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($dosens as $pegawai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <x-template.button.info-button url="admin/master-data/pegawai"
                                                            id="{{ $pegawai->id }}" />
                                                        <x-template.button.edit-button url="admin/master-data/pegawai"
                                                            id="{{ $pegawai->id }}" />
                                                        <x-template.button.delete-button url="admin/master-data/pegawai"
                                                            id="{{ $pegawai->id }}" />
                                                    </div>

                                                </td>
                                                <td>
                                                    @if ($pegawai->nip && $pegawai->nik)
                                                        {{ $pegawai->nik }}/ {{ $pegawai->nip }}
                                                    @elseif($pegawai->nik)
                                                        {{ $pegawai->nik }}
                                                    @elseif($pegawai->nip)
                                                        {{ $pegawai->nip }}
                                                    @endif
                                                </td>
                                                <td>{{ $pegawai->nama }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!----------teknisi------------>
                    <div class="card ms-2 mt-3" style="border: 1px solid #000000;">
                        <div class="card-header bg-transparent border-dark">
                            <h3>Teknisi</h3>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="tableme table-bordered">
                                    <thead class="bg-primary text-white">
                                        <th>NO</th>
                                        <th width="100px">Aksi</th>
                                        <th>NIP/NIK</th>
                                        <th>Nama</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($teknisis as $pegawai)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <x-template.button.info-button url="admin/master-data/pegawai"
                                                            id="{{ $pegawai->id }}" />
                                                        <x-template.button.edit-button url="admin/master-data/pegawai"
                                                            id="{{ $pegawai->id }}" />
                                                        <x-template.button.delete-button url="admin/master-data/pegawai"
                                                            id="{{ $pegawai->id }}" />
                                                    </div>

                                                </td>
                                                <td>
                                                    @if ($pegawai->nip && $pegawai->nik)
                                                        {{ $pegawai->nik }}/ {{ $pegawai->nip }}
                                                    @elseif($pegawai->nik)
                                                        {{ $pegawai->nik }}
                                                    @elseif($pegawai->nip)
                                                        {{ $pegawai->nip }}
                                                    @endif
                                                </td>
                                                <td>{{ $pegawai->nama }}</td>
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
</x-module.admin>
