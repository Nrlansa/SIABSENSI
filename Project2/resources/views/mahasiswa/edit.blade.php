<x-module.mahasiswa>
    <div class="container">
        <div id="content">
            <main>
                <div>
                    <h2 class="mx-4 mt-3">Profile edit</h2>
                </div>
                <section class="bg-light pt-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 mb-4 mb-sm-5">
                                <div class="card card-style1 border-0">
                                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 mb-4 mb-lg-0">
                                                <img src="{{ url('/') }}/asset/profile.jpg" alt="Admin"
                                                    width="200" />
                                            </div>
                                            <div class="card col-lg-8 px-xl-10">
                                                <form action="{{ url('update-profil', $mahasiswa->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="card-title">
                                                        <div class="float-right">
                                                            <button class="float-end btn btn-primary mt-2 mb-2 mx-3"><i
                                                                    class="fa fa-save mx-1"></i>Save</button>
                                                        </div>
                                                        <div class="d-lg-inline-block-end px-sm-1 mb-1-9 rounded">
                                                            <h3 class="h2 text-black">Data Mahasiswa</h3>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                    <ul class="list-unstyled mb-1-9 pt-2">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for=""
                                                                        class="control-label">Nama</label>
                                                                    <h4 type="text" name="nama"
                                                                        class="form-control"> {{ $mahasiswa->nama }}
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for=""
                                                                        class="control-label">NIM</label>
                                                                    <h4 type="text" name="nim"
                                                                        class="form-control">{{ $mahasiswa->nim }}
                                                                    </h4>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="" class="control-label">Tahun
                                                                        Angkatan</label>
                                                                    <h4 type="text" name="angkatan"
                                                                        class="form-control">
                                                                        {{ $mahasiswa->angkatan }}
                                                                    </h4>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for=""
                                                                            class="control-label">Tempat,Tanggal Lahir
                                                                        </label>
                                                                        <h4 type="text" name="angkatan"
                                                                            class="form-control">
                                                                            @if ($mahasiswa->tempat_lahir && $mahasiswa->tanggal_lahir)
                                                                                {{ $mahasiswa->tempat_lahir }},
                                                                                {{ $mahasiswa->tanggal_lahir }}
                                                                            @elseif($mahasiswa->tempat_lahir)
                                                                                {{ $mahasiswa->tempat_lahir }}
                                                                            @elseif($mahasiswa->tanggal_lahir)
                                                                                {{ $mahasiswa->tanggal_lahir }}
                                                                            @endif
                                                                        </h4>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for=""
                                                                            class="control-label">Password</label>
                                                                        <input type="password" name="password"
                                                                            value="{{ $mahasiswa->password }}"
                                                                            class="form-control">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </ul>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</x-module.mahasiswa>
