<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <!-- <link rel="stylesheet" href="/vendor/nucleo/css/nucleo.css" type="text/css"> -->
    <link rel="stylesheet" href="/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="/css/argon.css?v=1.2.0" type="text/css">
    <!-- lightbox  -->
    <link rel="stylesheet" href="/css/lightbox.min.css" type="text/css">
    <!-- Admin sb-2  -->
    <!-- <link rel="stylesheet" href="/css/sb-admin-2.min.css" type="text/css"> -->
    <!-- tabel  -->
    <link rel="stylesheet" href="/vendor/datatables/dataTables.bootstrap4.min.css">


</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center mb-4">
                <a class="navbar-brand" href="javascript:void(0)">

                    <h1>EVOLUTION</h1>


                    <p> Admin Controls </p>
                </a>
            </div>

            <div class=" navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/admin/dashboard')}}" style="font-size: 18px; text-align: center">
                                <i class="fas fa-home" style="font-size: 16px;"></i>
                                <span class="nav-link-text ml-2">Dashboard</span>
                            </a>
                        </li>
                        <!-- Divider -->
                        <hr class="my-2">
                        <li class="nav-item dropdown">
                            <a style="font-size: 18px; text-align: center" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-plus mr-2" style="font-size: 16px;"></i>
                                <span> Daftarkan Peserta</span>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right">
                                <!-- List group -->
                                <div class="list-group list-group-flush">
                                    <a href="{{url('/admin/tambah')}}" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                            </div>
                                            <div class="col ml--2">
                                                <h4 class="mb-0 text-sm">Electra</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a href="{{url('/admin/tambah-baronas')}}" class="list-group-item list-group-item-action disabled">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                            </div>
                                            <div class="col ml--2">
                                                <h4 class="mb-0 text-sm">Baronas</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class="my-2">
                        <li class="nav-item dropdown">
                            <a style="font-size: 18px; text-align: center" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-list-alt mr-2" style="font-size: 16px;"></i>
                                <span> Daftar Peserta</span>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right">
                                <!-- List group -->
                                <div class="list-group list-group-flush">
                                    <a href="{{url('/admin/list/electra')}}" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                            </div>
                                            <div class="col ml--2">
                                                <h4 class="mb-0 text-sm">Electra</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a href="{{url('/admin/list/baronas')}}" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                            </div>
                                            <div class="col ml--2">
                                                <h4 class="mb-0 text-sm">Baronas</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a href="{{url('/admin/list/evolve')}}" class="list-group-item list-group-item-action disabled">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                            </div>
                                            <div class="col ml--2">
                                                <h4 class="mb-0 text-sm">Evolve</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>

                        <!-- Divider -->
                        <hr class="my-2">
                        <li class="nav-item dropdown">
                            <a style="font-size: 18px; text-align: center" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-file-excel mr-2" style="font-size: 16px;"></i>
                                <span> Export Data</span>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right">
                                <!-- List group -->
                                <div class="list-group list-group-flush">
                                    <a href="{{url('/admin/export/electra')}}" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                            </div>
                                            <div class="col ml--2">
                                                <h4 class="mb-0 text-sm">Electra</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                            </div>
                                            <div class="col ml--2">
                                                <h4 class="mb-0 text-sm">Baronas</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group list-group-flush">
                                    <a href="#" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                            </div>
                                            <div class="col ml--2">
                                                <h4 class="mb-0 text-sm">Evolve</h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>



                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">
                </div>
            </div>
        </div>
    </nav>


    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand bg-default navbar-dark border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>

                    </ul>
                    <ul class="navbar-nav align-items-center  ml-auto ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <!-- <img alt="Image placeholder" src="/img/user/topik.png"> -->
                                        <i class="fas fa-user-shield fa-lg"></i>
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <a href="{{ route('user.logout') }}" class="dropdown-item">
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>


        <!-- PISAHHHH  -->

        @yield('container')

        <!-- PPPPIIISAAAHH  -->


        <!-- Footer -->
        <footer class="footer pt-0">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6">
                    <div class="copyright text-center  text-lg-left  text-muted">
                        &copy; 2021 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank" style="color: #172B4D">Evolution</a>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Elektro ITS</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </footer>
    </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/vendor/js-cookie/js.cookie.js"></script>
    <script src="/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Argon JS -->
    <script src="/js/argon.js?v=1.2.0"></script>
    <!-- Ligthbox  -->
    <script src="/js/lightbox-plus-jquery.min.js"></script>
    <!-- tabel  -->
    <script src="/vendor/datatables/jquery.dataTables.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="/js/demo/datatables-demo.js"></script>


</body>

</html>
