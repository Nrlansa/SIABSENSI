<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <x-template.button.back-button url="admin/master-data/kelas" />
                <div class="card">
                    <div class="card-header ">
                        <div class="card-title">
                            <h5 class="mx-2 pt-2"> Tambah Data Kelas</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/master-data/kelas') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Kelas</label>
                                        <input type="text" name="nama" id=""
                                            class="form-control @error('nama') is-invalid @enderror">
                                        @error('nama')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Semester</label>
                                        <select name="id_semester" id="" class="form-control">
                                            @foreach ($list_semester as $semester)
                                                <option value="{{ $semester->id }}">{{ $semester->semester }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class=" float-end btn btn-primary mt-3"
                                        onclick="return confirm('apakah anda yakin ingin menambah data ini? harap periksa kembali')"><i
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
