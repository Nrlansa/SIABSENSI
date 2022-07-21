<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <x-template.button.back-button url="admin/master-data/mahasiswa" />
                <div class="card">
                    <div class="card-header">
                        <h5 class=" pt-2">Detail Data Mahasiswa</h5>
                    </div>
                    <div class="card-body">

                        <td class="card-text">Nama: {{ $mahasiswa->nama }}</td> <br>
                        <td class="card-text">NIM: {{ $mahasiswa->nim }}</td> <br>
                        <td class="card-text">Tahun Angkatan: {{ $mahasiswa->angkatan }}</td> <br>
                        <td class="card-text">Nomor HP: {{ $mahasiswa->no_hp }}</td> <br>
                        <td class="card-text">Agama:
                            @if ($mahasiswa->agama == 1)
                        <td>Islam</td>
                    @elseif ($mahasiswa->agama == 2)
                        <td>Kristen Protestan</td>
                    @elseif ($mahasiswa->agama == 3)
                        <td>Katolik</td>
                    @elseif ($mahasiswa->agama == 4)
                        <td>Hindu</td>
                    @elseif ($mahasiswa->agama == 5)
                        <td>Buddha</td>
                    @elseif ($mahasiswa->agama == 6)
                        <td>Konghucu</td>
                        @endif
                        </td> <br>
                        <td class="card-text">Email: {{ $mahasiswa->email }}</td> <br>
                        <td class="card-text">Tempat, tanggal lahir: {{ $mahasiswa->tempat_lahir }},
                            {{ $mahasiswa->tanggal_lahir }}</td> <br>
                        <td class="card-text">Jenis Kelamin:
                            @if ($mahasiswa->jenis_kelamin == 1)
                        <td>Laki-Laki</td> <br>
                        @endif

                        @if ($mahasiswa->jenis_kelamin == 2)
                            <td>Perempuan</td><br>
                        @endif
                        </td>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
