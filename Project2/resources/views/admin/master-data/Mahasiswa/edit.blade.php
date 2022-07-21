<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <x-template.button.back-button url="admin/master-data/mahasiswa" />
                <div class="card">
                    <div class="card-header ">
                        <div class="card-title">
                            <h5 class="mx-2 pt-2"> Edit Data Mahasiswa</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/master-data/mahasiswa', $mahasiswa->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">NIM</label>
                                        <input type="text" name="nim" value="{{ $mahasiswa->nim }}"
                                            id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama</label>
                                        <input type="text" name="nama" value="{{ $mahasiswa->nama }}"
                                            id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tempat Lahir</label>
                                        <input type="text" name="tempat_lahir"
                                            value="{{ $mahasiswa->tempat_lahir }}" id=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal Lahir</label>
                                        <input type="text" name="tempat_lahir"
                                            value="{{ $mahasiswa->tanggal_lahir }}" id=""
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" value="{{ $mahasiswa->jenis_kelamin }}"
                                            id="" class="form-control form-control-sm">
                                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                            <option value="1">Laki-Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Angkatan</label>
                                        <input type="text" name="angkatan" value="{{ $mahasiswa->angkatan }}"
                                            id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Alamat</label>
                                        <input type="text" name="alamat" value="{{ $mahasiswa->alamat }}"
                                            id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Password</label>
                                        <input type="password" name="password" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class=" float-end btn btn-primary mt-3"><i
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
