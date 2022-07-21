<x-module.mahasiswa>
    @include('section.mahasiswa')
    <div class="card">
        <div id="content">
            <main>
                <div>

                </div>
                <section class="bg-light pt-4 mt-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <div class="card card-style1 border-0">
                                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 mb-4 mb-lg-0">
                                                <img src="{{ url('/') }}/asset/profile.jpg" alt="Admin"
                                                    width="200">
                                            </div>
                                            <div class="card col-lg-8 px-xl-10">

                                                <div class="card-title">
                                                    <div class="float-right">
                                                        <a href="{{ url("mahasiswa/edit-profil/$mahasiswa->id") }}"
                                                            class="float-end btn btn-primary mt-2 mb-2 mx-3"><i
                                                                class="fas fa-pen mx-1"></i>Edit</a>
                                                    </div>
                                                    <div class="d-lg-inline-block-end px-sm-1 mb-1-9 rounded">
                                                        <h3 class="h2 text-black">Data Mahasiswa</h3>
                                                    </div>
                                                    <hr />
                                                    <p>
                                                        <b>Nama</b> : {{ $mahasiswa->nama }} <br>
                                                        <b>NIM</b> : {{ $mahasiswa->nim }} <br>
                                                        <b>Tahun Angkatan</b> : {{ $mahasiswa->angkatan }}<br>
                                                        <b>Tempat, Tanggal lahir</b> :
                                                        @if ($mahasiswa->tempat_lahir && $mahasiswa->tanggal_lahir)
                                                            {{ $mahasiswa->tempat_lahir }},
                                                            {{ $mahasiswa->tanggal_lahir }}
                                                        @elseif($mahasiswa->tempat_lahir)
                                                            {{ $mahasiswa->tempat_lahir }}
                                                        @elseif($mahasiswa->tanggal_lahir)
                                                            {{ $mahasiswa->tanggal_lahir }}
                                                        @endif
                                                    </p>
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
