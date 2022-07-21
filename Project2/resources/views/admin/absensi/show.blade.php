<x-module.admin>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-2">
                <x-template.button.back-button url="admin/absensi/absensi-data" />
                <a href="{{ url('laporan-semester') }}" class="btn btn-primary float-end"><i class="fa fa-calendar"></i>
                    Laporan
                    Semester</a>
                <div class="card border-info mb-3">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="control-label">Data Absensi Bulan</label>
                                <select name="" id="bulan_selected" class="form-control"
                                    onchange="gantiBulan('{{ $id_kelas }}',this.value)">
                                    <option value="01" @if ($bulan_selected == '01') selected @endif>Januari
                                    </option>
                                    <option value="02" @if ($bulan_selected == '02') selected @endif>Februari
                                    </option>
                                    <option value="03" @if ($bulan_selected == '03') selected @endif>Maret
                                    </option>
                                    <option value="04" @if ($bulan_selected == '04') selected @endif>April
                                    </option>
                                    <option value="05" @if ($bulan_selected == '05') selected @endif>Mei
                                    </option>
                                    <option value="06" @if ($bulan_selected == '06') selected @endif>Juni
                                    </option>
                                    <option value="07" @if ($bulan_selected == '07') selected @endif>Juli
                                    </option>
                                    <option value="08" @if ($bulan_selected == '08') selected @endif>Agustus
                                    </option>
                                    <option value="09" @if ($bulan_selected == '09') selected @endif>September
                                    </option>
                                    <option value="10" @if ($bulan_selected == '10') selected @endif>Oktober
                                    </option>
                                    <option value="11" @if ($bulan_selected == '11') selected @endif>November
                                    </option>
                                    <option value="12" @if ($bulan_selected == '12') selected @endif>Desember
                                    </option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Tahun</label>
                                    <select name="" id="tahun_selected" class="form-control"  onchange="gantiTahun('{{ $id_kelas }}',this.value)">
                                        @for($i = date("Y") - 5; $i <= date("Y"); $i++)
                                            <option value="{{$i}}" @if($tahun_selected == $i) selected @endif>{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-body">

                        <table id="datatablesSimple">
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
                                            {{ $sakit }} <br>
                                            ({{ $persentase }}%)
                                        </td>
                                        <td>
                                            @php
                                                $izin = $list_izin->where('id_mahasiswa', $mahasiswa->id)->count();
                                                $tidak_hadir += $izin;
                                                $persentase = number_format(($izin / $jumlah_hari_aktif) * 100, 2);
                                            @endphp
                                            {{ $izin }}<br>
                                            ({{ $persentase }}%)
                                        </td>
                                        <td>
                                            {{ $jumlah_hari_aktif - $mahasiswa->jumlah_absen - $tidak_hadir }} Hari
                                            <br>
                                        </td>

                                        <td>
                                            {{ $jumlah_hari_aktif }}
                                        </td>
                                        <td>
                                            {{ $mahasiswa->jumlah_absen }}
                                            ({{ $mahasiswa->persentase_kehadiran }} %)
                                        </td>
                                        {{-- <td>{{ $jumlah_hari_aktif }}</td> --}}
                                        {{-- <td>
                                            {{ $mahasiswa->jumlah_absen }} Hari
                                            ({{ number_format(($mahasiswa->jumlah_absen / $jumlah_hari_aktif) * 100, 2) }}
                                            %)
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('script')

        <script>
            const gantiBulan = (id_kelas, bulan) => {
                tahun = $('#tahun_selected').val()
                const url = `{{ url('lihat-absensi') }}/${id_kelas}?bulan=${bulan}&tahun=${tahun}`
                window.location.href = url
            }

            const gantiTahun = (id_kelas, tahun) => {
                bulan = $("#bulan_selected").val()
                const url = `{{ url('lihat-absensi') }}/${id_kelas}?bulan=${bulan}&tahun=${tahun}`
                window.location.href = url
            }
        </script>
    @endpush
</x-module.admin>
