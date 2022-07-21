<x-module.printer>
    <style>
        body {
            width: 240m;
            height: 100%;
            margin: 0 auto;
            padding: 0;
            font-size: 12pt;
            background: rgb(204, 204, 204);
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .main-page {
            width: 210mm;
            height: 100%;
            margin: 10mm auto;
            background: white;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
        }

        .sub-page {
            padding: 1cm;
            height: 100%;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            .main-page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
        }
    </style>

    <div class="main-page">
        <div class="card-header">
            <div class="card-title">
                Data Absensi Bulan {{ $bulan_awal }} - {{ $bulan_akhir }}
            </div>
        </div>
        {{-- <div class="subpage"> --}}
        <div class="sub-page">
            <div style="overflow-x: auto;">
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">
                        <th>No</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Jumlah Sakit</th>
                        <th>Jumlah Izin</th>
                        <th>Jumlah Alpa</th>
                        <th>Jumlah Hari efektif</th>
                        <th>Persentase Kehadiran</th>
                    </thead>
                    <tbody>
                        @foreach ($list_mahasiswa as $mahasiswa)
                            @php
                                $tidak_hadir = 0;
                            @endphp
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $mahasiswa->nim }}</td>
                                <td>{{ $mahasiswa->nama }}</td>

                                <td>
                                    @php
                                        $sakit = $list_sakit->where('id_mahasiswa', $mahasiswa->id)->count();
                                        $tidak_hadir += $sakit;
                                        $persentase = number_format(($sakit / $jumlah_hari_aktif) * 100, 2);
                                    @endphp
                                    {{-- {{ $sakit }} --}}
                                    ({{ $persentase }}%)
                                </td>
                                <td>
                                    @php
                                        $izin = $list_izin->where('id_mahasiswa', $mahasiswa->id)->count();
                                        $tidak_hadir += $izin;
                                        $persentase = number_format(($izin / $jumlah_hari_aktif) * 100, 2);
                                    @endphp
                                    {{-- {{ $izin }} --}}
                                    ({{ $persentase }}%)
                                </td>
                                <td>
                                    {{ $jumlah_hari_aktif - $mahasiswa->jumlah_absen - $tidak_hadir }}
                                    Hari

                                </td>

                                <td>
                                    {{ $jumlah_hari_aktif }}
                                </td>
                                {{-- <td>
                                                    {{ $mahasiswa->jumlah_absen }}
                                                    ({{ $mahasiswa->persentase_kehadiran }} %)
                                                </td> --}}
                                {{-- <td>{{ $jumlah_hari_aktif }}</td> --}}
                                <td>
                                    {{ $mahasiswa->jumlah_absen }} Hari
                                    ({{ number_format(($mahasiswa->jumlah_absen / $jumlah_hari_aktif) * 100, 2) }}
                                    %)
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- </div> --}}
        </div>
    </div>

    <script>
        const gantiBulan = (id_kelas, bulan) => {
            const url = `{{ url('lihat-absensi') }}/${id_kelas}?bulan=${bulan}`
            window.location.href = url
        }
    </script>
</x-module.printer>
