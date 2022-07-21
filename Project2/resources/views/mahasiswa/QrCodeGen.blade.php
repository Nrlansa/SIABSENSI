<x-module.mahasiswa>

    <div class="container">
        <div class="col-md-12 mt-3">
            <!--Button trigger modal -->
            <button type="button" class="btn btn-primary  mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa fa-qrcode"></i> Ambil QR Code
            </button>
            <!-------akhir button-------->

            <div class="card border-dark mb-3">
                <div class="card-header" style="font-size: 26px">
                    Izin
                </div>
                <form action="{{ url('store-izin') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <input type="text" value="{{ $mahasiswa->id }}" name="id_mahasiswa" hidden>
                            @foreach ($list_anggota as $anggota)
                                @if ($anggota->id_mahasiswa == $mahasiswa->id)
                                    <input type="text" value="{{ $anggota->id_kelas }}" name="id_kelas" hidden>
                                @endif
                            @endforeach


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Upload File Izin</label>
                                    <input type="file" name="file" required="required" class="form-control"
                                        accept="application/pdf">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label ">Keterangan</label>
                                    <select class="form-select" aria-label="Default select example" name="keterangan">
                                        <option selected>Pilih Keterangan </option>
                                        <option value="sakit">Sakit</option>
                                        <option value="izin">Izin</option>
                                    </select>

                                </div>
                            </div>


                        </div>
                        <p class="mt-3" style="color: red; font-size: 13px ">
                            <i>*Upload bukti izin dengan jelas dalam bentuk PDF <br>
                                *Bukti izin dapat berupa Surat yang diketahui Orangtua atau surat keterangan dari
                                Dokter<br>
                                *jangan lupa memilih keterangan
                            </i>
                        </p>
                        <button class="btn btn-primary float-end mb-4"
                            onclick="return confirm('Periksa kembali data izin anda pastikan semua telah terisi!!')"><i
                                class="fa fa-save mx-2"></i>Simpan</button>
                </form>

            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Gunakan QR Code Anda dengan bijak</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img src="{{ $img }}" alt="QR Code" style="display:block; margin:auto;">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>


</x-module.mahasiswa>
