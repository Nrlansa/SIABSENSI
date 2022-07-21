<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <x-template.button.back-button url="admin/master-data/mahasiswa" />
                 <div class="card">
                    <div class="card-header ">
                        <div class="card-title">
                            <h5 class="mx-2 pt-2"> Edit Data edit</h5>
                        </div>
                            <div class="card-body">
                                <form action="{{url('admin/master-data/kelas', $kela->id )}}" method="post">
                                    @csrf
                                    @method("PUT")
                                <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="control-label">Nama Kelas</label>
                                                <input type="text" name="nama"  id="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="" class="control-label">Semester</label>
                                                <select name="id_semester" id="" class="form-control">
                                                @foreach ($list_semester as $semester )
                                                    <option value="{{$semester->id}}">{{$semester->semester}}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class=" float-end btn btn-primary mt-3"><i class="fas fa-save mx-2"></i>Simpan</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-module.admin>
