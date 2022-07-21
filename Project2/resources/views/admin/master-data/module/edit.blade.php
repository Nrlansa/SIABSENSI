<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <x-template.button.back-button url="admin/master-data/module" />
                <div class="card">
                    <div class="card-header ">
                        <div class="card-title">
                            <h5 class="mx-2 pt-2"> Edit Module</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/master-data/module', $module->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">App</label>
                                        <input type="text" name="app" value="{{ $module->app }}"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Name</label>
                                        <input type="text" name="name"value="{{ $module->name }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Title</label>
                                        <input type="text" name="title"
                                            value="{{ $module->title }}"class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Sub Title</label>
                                        <input type="text" name="subtitle"value="{{ $module->subtitle }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">URL</label>
                                        <input type="text" name="url"
                                            value="{{ $module->url }}"class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Color</label>
                                        <input type="text" name="color"value="{{ $module->color }}"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tag</label>
                                        <input type="text" name="tag"
                                            value="{{ $module->tag }}"class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Menu</label>
                                        <input type="text" name="menu"
                                            value="{{ $module->menu }}"class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class=" float-end btn btn-primary mt-3"
                                        onclick="return confirm('apakah anda yakin ingin menyimpan data ini?')"><i
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
