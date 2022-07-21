<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <x-template.button.back-button url="admin/master-data/pegawai" />
                <div class="card">
                    <div class="card-header">
                        <h5 class=" pt-2">Data Pegawai</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Nama : {{ $pegawai->nama }} </p>
                        <p class="card-text">NIP : {{ $pegawai->nip }} </p>
                        <p class="card-text">NIK : {{ $pegawai->nik }} </p>
                        <p class="card-text">Email : {{ $pegawai->email }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
