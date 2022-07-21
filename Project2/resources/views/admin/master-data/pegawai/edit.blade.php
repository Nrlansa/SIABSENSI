<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <x-template.button.back-button url="admin/master-data/pegawai" />
                 <div class="card">
                    <div class="card-header ">
                        <div class="card-title">
                            <h5 class="mx-2 pt-2"> Edit Data Pegawai</h5>
                        </div>
                    </div>
                            <div class="card-body">
                                <form action="{{url('admin/master-data/pegawai', $pegawai->id )}}" method="post">
                                    @csrf
                                    @method("PUT")

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">NIP</label>
                                            <input type="text" name="nip" value="{{ $pegawai->nip }}" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Nama</label>
                                            <input type="text" name="nama" value="{{ $pegawai->nama}}" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">NIK</label>
                                            <input type="text" name="nik"value="{{ $pegawai->nik }}" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Email</label>
                                            <input type="text" name="email" value="{{ $pegawai->email}}" id="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jabatan">Jabatan</label>
                                            <select name="jabatan" id="" class="form-control" value="{{ $pegawai->jabatan}}">
                                                <option value="" disabled selected>Pilih Jabatan</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Dosen</option>
                                                <option value="3">Teknisi</option>    
                                            </select>
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
                                        <button class=" float-end btn btn-primary mt-3" onclick="return confirm('apakah anda yakin ingin menyimpan data ini?')"><i class="fas fa-save mx-2"></i>Simpan</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                   
            </div>
        </div>
    </div>
</x-module.admin>
