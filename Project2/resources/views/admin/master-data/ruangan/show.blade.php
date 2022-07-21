<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <x-template.button.back-button url="admin/master-data/ruangan" />
                <div class="card">
                    <div class="card-header">
                        <h5 class=" pt-2">Data Ruangan</h5>
                    </div>
                    <div class="card-body">
                      <p class="card-text">Nama Ruangan : {{ $ruangan->kode_ruangan}} </p>
                      <p class="card-text">Nama Ruangan : {{ $ruangan->nama_ruangan}} </p>
                      <p class="card-text">Kapasitas Ruangan : {{ $ruangan->kapasitas_ruangan}}</p>
                      <p class="card-text">Jenis Ruangan :  {{ $ruangan->jenis_ruangan}} </p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-module.admin>