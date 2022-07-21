<x-module.mahasiswa>

    <style>
        td {
            text-align: center;
        }
    </style>
    <main>
        <div class="container-fluid px-4">
            <div class="mt-3">
                <h1>Selamat Datang @if (auth()->guard('mahasiswa')->user())
                        {{ auth()->guard('mahasiswa')->user()->nama }}
                    @elseif (auth()->user())
                        {{ auth()->user()->nama }}
                    @endif
                </h1>
            </div>
            <div class="card-body">
                {{-- <div style="overflow-x: auto;">
                    <table class="tableme table-bordered">
                        <thead class="bg-primary text-white">

                            <th>NO</th>
                            <th>Tanggal Absen</th>
                            <th>Jumlah Absen</th>
                        </thead>
                        <tbody>
                            <tr> --}}
                {{-- @foreach ($mahasiswa as $absensi)
                                    @if ($mahasiswa->id == $absensi->id_mahasiswa)
                                        <td>No</td>
                                        <td>{{ $absensi->created_at }}</td>
                                        <td></td>
                                    @endif
                                @endforeach --}}
                </tr>
                {{-- @foreach ($list_mahasiswa as $mahasiswa)
                                @if ($mahasiswa->id == $absensi->id_mahasiswa)
                                    <tr>
                                        <td>{{ $mahasiswa->$absensi->created_at }}</td>

                                        <td>{{ $anggota->mahasiswa->nama }}</td>
                                        <td>{{ $anggota->kelas->semester->semester }}</td>
                                    </tr>
                                @endif
                            @endforeach --}}
                {{-- </tbody>
                </table> --}}
            </div>
            <br>

        </div>
    </main>
</x-module.mahasiswa>
