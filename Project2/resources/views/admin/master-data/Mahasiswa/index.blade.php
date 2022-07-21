<x-module.admin>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h5 class="mx-4 pt-2">
                                Data Mahasiswa
                            </h5>
                        </div>
                        <div class="float-right">
                            <a href="{{ url('admin/master-data/mahasiswa/create') }}"
                                class="float-end btn btn-primary mt-2 mb-2 mx-3"><i class="fa fa-plus mx-1"></i>Tambah
                                Data</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger float-end mt-2 mb-2" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fa fa-file-import"></i>
                                Import Data Mahasiswa
                            </button>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Import Data Mahasiswa</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form action="/mahasiswa/import" method="POST" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="file" name="file" required="required">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!-- akhir Modal -->

                    <!-- data mahasiswa -->
                    <div class="row pt-3 mx-2">
                        <div class="col-sm-12">
                            <div class="card-body">
                                <div style="overflow-x: auto;">
                                    <table id="datatablesSimple">
                                        <thead class="bg-primary text-white">
                                            <th>NO</th>
                                            <th width="100px">Aksi</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Tahun Angkatan</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_mahasiswa as $mahasiswa)
                                                <tr>
                                                    <td scope="row">{{ $loop->iteration }}</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <x-template.button.info-button
                                                                url="admin/master-data/mahasiswa"
                                                                id="{{ $mahasiswa->id }}" />
                                                            <x-template.button.edit-button
                                                                url="admin/master-data/mahasiswa"
                                                                id="{{ $mahasiswa->id }}" />
                                                            <x-template.button.delete-button
                                                                url="admin/master-data/mahasiswa"
                                                                id="{{ $mahasiswa->id }}" />
                                                        </div>
                                                    </td>

                                                    <td>{{ $mahasiswa->nim }}</td>
                                                    <td>{{ $mahasiswa->nama }}</td>
                                                    <td>{{ $mahasiswa->angkatan }}</td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-module.admin>
