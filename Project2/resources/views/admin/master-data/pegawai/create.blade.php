<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <x-template.button.back-button url="admin/master-data/pegawai" />
                <div class="card">
                    <div class="card-header ">
                        <div class="card-title">
                            <h5 class="mx-2 pt-2"> Tambah Data Pegawai</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/master-data/pegawai') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">NIP</label>
                                        <input type="text" name="nip" id="" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama</label>
                                        <input type="text" name="nama" id=""
                                            class="form-control @error('nama') is-invalid @enderror">
                                        @error('nama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">NIK</label>
                                        <input type="text" name="nik" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Email</label>
                                        <input type="email" name="email" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <select name="jabatan" id=""
                                            class="form-control @error('jabatan') is-invalid @enderror">
                                            <option value="" disabled selected>Pilih Jabatan</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Dosen</option>
                                            <option value="3">Teknisi</option>
                                        </select>
                                        @error('jabatan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Password</label>
                                        <input type="password" name="password" id=""
                                            class="form-control  @error('password') is-invalid @enderror">
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
