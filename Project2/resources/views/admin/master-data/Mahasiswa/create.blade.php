<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <x-template.button.back-button url="admin/master-data/mahasiswa" />
                <div class="card">
                    <div class="card-header ">
                        <div class="card-title">
                            <h5 class="mx-2 pt-2"> Tambah Data Mahasiswa</h5>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('admin/master-data/mahasiswa') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">NIM</label>
                                        <input type="text" name="nim" id=""
                                            class="form-control form-control-sm @error('nim') is-invalid @enderror">
                                        @error('nim')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama</label>
                                        <input type="text" name="nama" id=""
                                            class="form-control form-control-sm @error('nama') is-invalid @enderror">
                                        @error('nama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tempat lahir</label>

                                        <input type="text" name="tempat_lahir" id=""
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nomor HP</label>

                                        <input type="text" name="nomor hp" id=""
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tanggal lahir</label>

                                        <input type="Date" name="tanggal_lahir" id=""
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan">Jenis Kelamin</label>
                                        <select name="jenis_kelamin" id=""
                                            class="form-control form-control-sm">
                                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                            <option value="1">Laki-Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan">Agama</label>

                                        <select name="agama" id="" class="form-control form-control-sm">
                                            <option value="" disabled selected>Pilih Agama</option>
                                            <option value="1">Islam</option>
                                            <option value="2">Kristen Protestan</option>
                                            <option value="3">Katolik</option>
                                            <option value="4">Hindu</option>
                                            <option value="5">Buddha</option>
                                            <option value="6">Khonghucu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label"> Angkatan</label>
                                        <input type="text" name="angkatan" id=""
                                            class="form-control form-control-sm  @error('angkatan') is-invalid @enderror">
                                        @error('angkatan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email" class="control-label">Email</label>

                                        <input type="text" name="email" id=""
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Alamat</label>

                                        <input type="text" name="alamat" id=""
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Password</label>

                                        <input type="password" name="password" id=""
                                            class="form-control form-control-sm @error('password') is-invalid @enderror">
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
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
