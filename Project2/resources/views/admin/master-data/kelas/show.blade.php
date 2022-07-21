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
                <x-template.button.back-button url="admin/master-data/kelas" />
                <div class="card">
                    <div class="card-header">
                        <h5 class="pt-2">Detail Data Kelas {{ $kelas->nama }}</h5>
                    </div>
                    <div class="card-body">

                        <div style="overflow-x: auto;">
                            <table id="datatablesSimple">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center"> NIM Anggota</th>
                                        <th class="text-center"> Nama Anggota</th>
                                        <th class="text-center"> Semester</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($list_anggota as $anggota)
                                        @if ($anggota->id_kelas >= $kelas->id)
                                            <tr>
                                                <td>
                                                    <a class="btn btn-danger"
                                                        href="{{ url("delete-anggota/$anggota->id") }}"><span
                                                            class="fa fa-trash"></span>
                                                        Hapus</a>
                                                </td>
                                                <td>{{ $anggota->mahasiswa->nim }}</td>
                                                <td>{{ $anggota->mahasiswa->nama }}</td>
                                                <td>{{ $anggota->kelas->semester->semester }}</td>
                                            </tr>
                                        @endif
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
