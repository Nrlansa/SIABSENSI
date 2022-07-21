<!DOCTYPE html>
<html lang="en">
<!--<![endif]-->

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="icon" href="{{ url('/') }}/asset/lg-ti.png" type="image/gif" style="width: 45px; hight:45px" />

    <meta name="description" content="Name of your web site">
    <meta name="author" content="Marketify">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>ABSENSI</title>

    <!-- STYLES -->
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="{{ url('/') }}/css/style.css" />
    <!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
    <!-- /STYLES -->

</head>

<body>

    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->

    <!-- WRAPPER ALL -->


    <!-- WAVE DOTS -->
    <div class="waves"></div>
    <!-- WAVE DOTS -->

    <!-- SETTINGS -->

    <!-- /SETTINGS -->

    <!-- MOBILE MENU -->

    <!-- /MOBILE MENU -->

    <!-- HEADER -->
    <div class="edrea_tm_header">
        <div class="header_inner">
            <div class="logo">

            </div>
            <div class="menu">
                <ul class="transition_link">

                </ul>
            </div>
        </div>
    </div>
    <!-- /HEADER -->
    <div class="edrea_tm_button ">
        <h3 style="font-size: 25px; color:chartreuse">
            <x-template.utils.notif />
        </h3>
    </div>


    <!-- CONTENT -->
    <div class="edrea_tm_content">

        <!-- HOME -->
        <div class="edrea_tm_section animated " id="home">
            <div class="section_inner">
                <div class="edrea_tm_home">

                    <a href="#"><img src="{{ url('/') }}/asset/lg-ti.png" width="140px" height="140px"
                            class="mt-5" alt="" style="display:block; margin:auto;" /></a>
                    <h3 class=" " style="font-size: 35px">Sistem Informasi
                        Absensi<br> Mahasiswa Program Studi D3 Teknologi Informasi</h3>

                    <h2>Ruangan Laboratorium Rekayasa Perangkat Lunak</h2>

                    <span class="cd-headline rotate-1 ">
                        <!-- ANIMATE TEXT VALUES: zoom, rotate-1, letters type, letters rotate-2, loading-bar, slide, clip, letters rotate-3, letters scale, push,  -->
                        <form action="{{ url('store-Rpl') }}" method="post">
                            @csrf
                            <input type="hidden" name="id_ruangan" value="96bc62d2-8a6c-4e61-bdba-8ca7f6fba78f">
                            <input type="password" class="form-control" placeholder="Tempelkan QR Code" name="nim"
                                required autofocus>
                        </form>
                    </span>


                </div>
            </div>
        </div>
        <!-- /HOME -->

        <!-- ABOUT -->

        <!-- /ABOUT -->

        <!-- PORTFOLIO -->

        <!-- /PORTFOLIO -->

        <!-- NEWS -->

        <!-- /NEWS -->

        <!-- CONTACT -->

        <!-- /CONTACT -->

    </div>
    <!-- /CONTENT -->

    <!-- MAGIC CURSOR -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /MAGIC CURSOR -->

    </div>
    <!-- / WRAPPER ALL -->

    <!-- SCRIPTS -->
    <script src="{{ url('/') }}/js/jquery.js"></script>
    <!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
    <script src="{{ url('/') }}/js/plugins.js"></script>
    <script src="{{ url('/') }}/js/init.js"></script>
    <!-- /SCRIPTS -->

</body>

</html>
