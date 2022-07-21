<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <x-template.button.back-button url="admin/master-data/matakuliah" />
                <div class="card">
                    <div class="card-header ">
                        <div class="card-title">
                            <h5 class="mx-2 pt-2"> Tambah Data Matakuliah</h5>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('admin/master-data/matakuliah') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kode Matakuliah</label>
                                        <input type="text" name="kode_makul" id=""
                                            class="form-control @error('kode_makul') is-invalid @enderror">
                                        @error('kode_makul')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Matakuliah</label>
                                        <input type="text" name="nama_makul" id=""
                                            class="form-control  @error('nama_makul') is-invalid @enderror">
                                        @error('nama_makul')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">SKS</label>
                                        <input type="text" name="sks" id=""
                                            class="form-control @error('sks') is-invalid @enderror">
                                        @error('sks')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="semester" name="semester">Semester</label>
                                        <select name="semester" id=""
                                            class="form-control @error('semester') is-invalid @enderror">
                                            <option value="" disabled selected>Pilih Semester</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                    @error('semester')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class=" float-end btn btn-primary mt-3"
                                        onclick="return confirm('apakah anda yakin ingin menambah data ini?')"><i
                                            class="fas fa-save mx-2"></i>Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-module.admin>
