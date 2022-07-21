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
                            <a href="{{ url('admin/master-data/kelas/create') }}"
                                class="float-end btn btn-primary mt-2 mb-2 mx-3"><i class="fa fa-plus mx-1"></i>Tambah
                                Data</a>
                        </div>
                        <div class="card-title">
                            <h5 class="mx-4 pt-2">Data kelas</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div style="overflow-x: auto;">
                        <table class="tableme table-bordered">
                            <thead class="bg-primary text-white">

                                <th>NO</th>
                                <th width="100px">Aksi</th>
                                <th>Nama kelas</th>
                                <th>Semester</th>
                                <th>Jumlah Mahasiswa</th>
                                <th>Tahun Ajar</th>
                            </thead>
                            <tbody>
                                @foreach ($list_kelas as $kelas)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <x-template.button.info-button url="admin/master-data/kelas"
                                                    id="{{ $kelas->id }}" />
                                                <x-template.button.delete-button url="admin/master-data/kelas"
                                                    id="{{ $kelas->id }}" />
                                            </div>
                                        </td>
                                        <td>{{ $kelas->semester->semester }} {{ $kelas->nama }}</td>
                                        <td>{{ $kelas->semester->semester }}</td>
                                        <td>{{ $kelas->anggota->count() }}</td>
                                        <td>{{ $kelas->semester->tahun_ajar }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <br>

                </div>

                {{-- kelas --}}
                <form action="{{ url('store-kelas') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <select name="id_kelas" class="form-control">
                                    <option value=""> Pilih Kelas</option>
                                    @foreach ($list_kelas as $kelas)
                                        <option value="{{ $kelas->id }}">{{ $kelas->semester->semester }}
                                            {{ $kelas->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                        <br>
                        <div style="overflow-x: auto;">
                            <table id="datatablesSimple">
                                <thead class="bg-primary text-white">
                                    <th width="100px">Aksi</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Angkatan</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_mahasiswa->whereNotIn('id', $list_anggota) as $mahasiswa)
                                        <tr>
                                            <td>
                                                <div>
                                                    <input class="form-check-input" type="checkbox"
                                                        name="mahasiswa[{{ $mahasiswa->id }}]" aria-label="...">
                                                </div>

                                            </td>
                                            <td>{{ $mahasiswa->nim }}</td>
                                            <td>{{ $mahasiswa->nama }}</td>
                                            <td>{{ $mahasiswa->angkatan }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>

                    </div>
                </form>
            </div>
        </div>
    </div>
</x-module.admin>
