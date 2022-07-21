<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <x-template.button.back-button url="admin/absensi/absensi-data" />

                <div class="card card-default">
                    <div class="card-header">
                        <div class="card-title">
                            Laporan Semester
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="" class="control-label">Bulan Awal</label>
                                                <select name="bulan_awal" id="" class="form-control">
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="" class="control-label">Tahun</label>
                                                <input type="text" name="tahun_awal" value="{{ date('Y') }}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="" class="control-label">Bulan Akhir</label>
                                                <select name="bulan_akhir" id="" class="form-control">
                                                    <option value="01">Januari</option>
                                                    <option value="02">Februari</option>
                                                    <option value="03">Maret</option>
                                                    <option value="04">April</option>
                                                    <option value="05">Mei</option>
                                                    <option value="06">Juni</option>
                                                    <option value="07">Juli</option>
                                                    <option value="08">Agustus</option>
                                                    <option value="09">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="" class="control-label">Tahun</label>
                                                <input type="text" name="tahun_akhir" value="{{ date('Y') }}"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kelas</label>
                                        <select name="id_kelas" id="" class="form-control">
                                            @foreach ($list_kelas as $kelas)
                                                <option value="{{ $kelas->id }}">
                                                    {{ $kelas->semester->semester }}{{ $kelas->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                                <div class="col-md-6 mt-3">
                                    <button class="btn btn-primary float-end" formtarget="_blank"><i
                                            class="fa fa-save"></i>
                                        Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-module.admin>
