<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <x-template.button.back-button url="admin/master-data/ruangan" />
                <div class="card">
                    <div class="card-header ">
                        <div class="card-title">
                            <h5 class="mx-2 pt-2"> Tambah Data Ruangan</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/master-data/ruangan') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kode Ruangan</label>
                                        <input type="text" name="kode_ruangan" id=""
                                            class="form-control @error('kode_ruangan') is-invalid @enderror">
                                        @error('kode_ruangan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Ruangan</label>
                                        <input type="text" name="nama_ruangan" id=""
                                            class="form-control @error('nama_ruangan') is-invalid @enderror">
                                        @error('nama_ruangan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Kapasitas Ruangan</label>
                                        <input type="text" name="kapasitas_ruangan" id=""
                                            class="form-control @error('kapasitas_ruangan') is-invalid @enderror">
                                        @error('kapasitas_ruangan')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Jenis Ruangan</label>
                                        <select name="jenis_ruangan" id="" class="form-control">
                                            <option value="Gedung Kuliah Bersama 1 Lantai 1">Gedung Kuliah Bersama 1
                                                Lantai 1</option>
                                            <option value="Gedung Kuliah Bersama 2 Lantai 2">Gedung Kuliah Bersama 2
                                                Lantai 2</option>
                                            <option value="Gedung Kuliah Bersama 2 Lantai 3">Gedung Kuliah Bersama 2
                                                Lantai 3</option>
                                            <option value="Gedung Laboratorium Bersama Lantai 3">Gedung Laboratorium
                                                Bersama Lantai 3</option>
                                        </select>
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
