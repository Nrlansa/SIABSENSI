<x-module.admin>
    <main >
        <div class="container-fluid px-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active mt-3" aria-current="page">Dashboard</li>
                </ol>
            </nav>

                    <h1> Selamat Datang @if(auth()->guard('mahasiswa')-> user())
                        {{auth()->guard('mahasiswa')->user()->nama}}
                        @elseif (auth()->user())
                        {{auth()->user()->nama}}
                        @endif 
                    </h1>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <a  href="{{ url('admin/master-data/pegawai') }}" style="text-decoration: none">
                        <div class="card text-white mb-4" style="background-color: #58749E">
                        <div class="float-end mx-3 mt-3">
                            <img src="{{ url('/') }}/asset/employee.png" width="40px" height="40px"  class="float-end">
                        </div>
                        <span class="text-white mx-3 mb-1">Pegawai</span>
                            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #C4C4C4">  
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a href="{{ url('admin/master-data/ruangan') }}" style="text-decoration: none" >
                        <div class="card text-white mb-4" style="background-color: #587E47">
                            <div class="float-end mx-3 mt-3">
                                <img src="{{ url('/') }}/asset/board-meeting.png" width="40px" height="40px" class="float-end">
                            </div>
                            <span class="text-white mx-3 mb-1" style="text-decoration: none">Ruangan</span>
                            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #C4C4C4">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xl-4 col-md-6">
                    <a href="{{ url('admin/master-data/mahasiswa') }}" style="text-decoration: none" >
                        <div class="card text-white mb-4" style="background-color: #9D891F">
                            <div class="float-end mx-3 mt-3">
                                <img src="{{ url('/') }}/asset/graduated.png" width="40px" height="40px"  class="float-end">
                            </div>
                            <span class="text-white mx-3 mb-1" >Mahasiswa</span>
                            <div class="card-footer d-flex align-items-center justify-content-between" style="background-color: #C4C4C4">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </main>
</x-module.admin> 

