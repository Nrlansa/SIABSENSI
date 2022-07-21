<nav class="sb-topnav navbar navbar-expand navbar-light" style="background-color: #8CCDC2">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3 mt-2 "><img src="{{ url('/') }}/asset/lg-ti.png" class="img-circle mb-2" alt=""
            width="58px" height="58px"><B>SIABSENSI</B> </a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
            class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">

    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li>
                    <div class="row">
                        <div class="col-md-12 text-center pt-3">
                            <img src="{{ url('/') }}/asset/profile.jpg" class="rounded-circle mx-auto "
                                width="120px" height="120px" alt="...">
                            <div class="card-body">
                                <p class="card-text" style="text-align: center">

                                    @if (Auth::guard('mahasiswa')->user())
                                        {{ Auth::guard('mahasiswa')->user()->nama }}
                                    @elseif (Auth::guard()->user())
                                        {{ Auth::guard()->user()->nama }}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                </li>
                <li>
                    @if (Auth::guard('mahasiswa')->user())
                        <a class="dropdown-item" href="{{ url('mahasiswa/profile') }}"><i
                                class="fas fa-user fa-fw"></i>Profil</a>
                </li>
            @elseif (Auth::guard()->user())
                @endif
                <li><a class="dropdown-item" href="{{ url('logout') }}"><i class="fas fa-sign-out-alt"></i>Logout</a>
                </li>
            </ul>
        </li>
        {{-- <li class="nav-item dropdown">
            @if (Auth::guard('mahasiswa')->user())
                <a class="nav-link " href="#"><i class="fas fa-bell"></i></a>
            @elseif (Auth::guard()->user())
            @endif
        </li> --}}
        @if (!auth()->guard('mahasiswa')->check())
            <li>
                <x-template.control-module />
            </li>
        @endif
    </ul>
</nav>
