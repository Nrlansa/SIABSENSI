<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ url('/') }}/asset/lg-ti.png" type="image/gif" style="width: 45px; hight:45px" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LOGIN SIABSENSI</title>
    <link href="{{ url('/') }}/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #F5FFFA">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">

                                <div class="text-center">
                                    <img src="{{ url('/') }}/asset/lg-ti.png" style="width: 129px;"
                                        class="rounded-0 mt-2" alt="logo">
                                    <h5 class="mt-2 mb-0 pb-3">Sistem Informasi Absensi<br>Mahasiswa Program Studi
                                        D3<br>Teknologi Infomasi</h5>
                                </div>
                                <div class="card-body" style="background-color: #87CEFA">
                                    @if (isset($message))
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                    @endif


                                    <form action="{{ url('login') }}" method="post">
                                        @csrf
                                        <!---input grup--->
                                        <div class="input-group mb-2 mt-4">
                                            <span class="input-group-text" id=""><i
                                                    class="fas fa-user"></i></span>
                                            <input type="text" name="userid" class="form-control"
                                                placeholder="Masukkan Akun Pengguna">
                                        </div>

                                        <div class="input-group mb-2 mt-2 pb-3">
                                            <span class="input-group-text" id="Password"><i
                                                    class="fas fa-lock"></i></span>
                                            <input type="password" name="password" class="form-control"
                                                placeholder="Masukkan Password">
                                        </div>
                                        {{-- <div class="form-check mb-3">
                                            <input class="form-check-input" id="remember" type="checkbox"
                                                value="" name="remember" /> value="1234"
                                            <label class="form-check-label" for="remember">Remember Password</label>
                                        </div> --}}
                                        <button type="submit"
                                            class="btn btn-primary btn-block float-end ">Login</button>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a
                                            href="https://wa.me/6282352434040?text=Halo%20Admin%20saya%20lupa%20password%20absensi,%20bisakah%20saya%20minta%20reset%20Password%20dengan%20nim">Lupa
                                            Password? Hubungi Admin</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2022 @if (date('Y') > '2022')
                                - {{ date('Y') }}
                            @endif |Created by <a href="#"
                                class="text-decoration-none text-muted fw-bold">TIM Siabsensi</a></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>
