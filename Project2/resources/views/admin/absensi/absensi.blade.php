<x-module.admin>
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-9 mt-5">
                <div class="card border-info mb-3" >
                    <div class="card-header">
                        Data Absensi Mahasiswa
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/master-data/absensi') }}" method="post">
                            @csrf
                            <input type="hidden" name="id_ruangan" value="96736158-660c-469f-854d-75382c435fa2">
                            <input type="text" class="form-control" placeholder="Tempelkan QR Code" name="nim" required autofocus>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
