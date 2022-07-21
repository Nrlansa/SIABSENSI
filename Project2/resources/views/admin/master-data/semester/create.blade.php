<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <x-template.button.back-button url="admin/master-data/semester" />
                <div class="card">
                    <div class="card-header ">
                        <div class="card-title">
                            <h5 class="mx-2 pt-2"> Tambah Data semester </h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/master-data/semester') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tahun Ajar</label>
                                        <input type="text" name="tahun_ajar" id=""
                                            class="form-control @error('tahun_ajar') is-invalid @enderror"
                                            autocomplete="off">
                                        @error('tahun_ajar')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Semester</label>
                                        <input type="text" name="semester" id=""
                                            class="form-control @error('semester') is-invalid @enderror">
                                        @error('semester')
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
