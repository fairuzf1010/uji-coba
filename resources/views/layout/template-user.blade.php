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
</head>

<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center mb-4">
                <a class="navbar-brand" href="javascript:void(0)">
                    <!-- <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> -->
                    <h1>EVOLUTION</h1>
                    <p> User Controls </p>
                </a>
            </div>

            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/user/dashboard')}}" style="font-size: 18px; text-align: center">
                                <i class="fas fa-home" style="font-size: 20px;"></i>
                                <span class="nav-link-text ml-2">Dashboard</span>
                            </a>
                        </li>
                        <!-- Divider -->
                        <hr class="my-2">
                        <li class="nav-item dropdown">
                            <a style="font-size: 18px; text-align: center" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-trophy mr-2" style="font-size: 20px;"></i>
                                <span>Pendaftaran</span>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right">
                                <!-- List group -->
                                <div class="list-group list-group-flush">
                                    <a href="{{url('/user/daftar/electra')}}" class="list-group-item list-group-item-action">
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
                                    <a href="{{url('/user/daftar/baronas')}}" class="list-group-item list-group-item-action">
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
                                    <a href="{{url('/user/daftar/evolve')}}" class="list-group-item list-group-item-action disabled">
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
         <hr class="my-2" style = "display:none;" >
         <li class="nav-item dropdown" style = "display:none;" >
             <a style="font-size: 18px; text-align: center;" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <i class="fas fa-link" style="font-size: 20px;"></i>
                 <span class="nav-link-text ml-2" style = "font-size:15px;">Upload Link Baronas</span>
             </a>
             <div class="dropdown-menu  dropdown-menu-right">
                 <!-- List group -->
                 <div class="list-group list-group-flush">
                     <a href="{{url('/user/upload-link-baronas/sd')}}" class="list-group-item list-group-item-action">
                         <div class="row align-items-center">
                             <div class="col-auto">
                             </div>
                             <div class="col ml--2">
                                 <h4 class="mb-0 text-sm">SD</h4>
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="list-group list-group-flush">
                     <a href="{{url('/user/daftar/baronas')}}" class="list-group-item list-group-item-action">
                         <div class="row align-items-center">
                             <div class="col-auto">
                             </div>
                             <div class="col ml--2">
                                 <h4 class="mb-0 text-sm">SMP</h4>
                             </div>
                         </div>
                     </a>
                 </div>
                 <div class="list-group list-group-flush">
                    <a href="{{url('/user/daftar/baronas')}}" class="list-group-item list-group-item-action">
                        <div class="row align-items-center">
                            <div class="col-auto">
                            </div>
                            <div class="col ml--2">
                                <h4 class="mb-0 text-sm">SMA</h4>
                            </div>
                        </div>
                    </a>
                </div>
                 <div class="list-group list-group-flush">
                     <a href="{{url('/user/daftar/baronas')}}" class="list-group-item list-group-item-action">
                         <div class="row align-items-center">
                             <div class="col-auto">
                             </div>
                             <div class="col ml--2">
                                 <h4 class="mb-0 text-sm">UMUM</h4>
                             </div>
                         </div>
                     </a>
                 </div>
             </div>
         </li>


                        <!-- Divider -->
                        <hr class="my-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{url('/user/upload-link-baronas')}}" style="font-size: 18px; text-align: center">
                                <i class="fa fa-link" style="font-size: 20px;"></i>
                                <span class="nav-link-text ml-2" style="font-size: 16px;">Upload Link Baronas</span>
                            </a>
                        </li>


                        <!-- Divider -->
                        <hr class="my-2">
                        <li class="nav-item dropdown">
                            <a style="font-size: 18px; text-align: center" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-money-bill-wave" style="font-size: 20px;"></i>
                                <span class="nav-link-text ml-2"> Pembayaran</span>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right">
                                <!-- List group -->
                                <div class="list-group list-group-flush">
                                    <a href="{{url('/user/pembayaran-electra')}}" class="list-group-item list-group-item-action">
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
                                    <a href="{{url('/user/pembayaran-baronas')}}" class="list-group-item list-group-item-action">
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
                                    <a href="{{url('/user/pembayaran-evolve')}}" class="list-group-item list-group-item-action disabled">
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


                        <!-- Divider Cetak Kartu Peserta Single
                        <hr class="my-2">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/user/kartu-peserta')}}" style="font-size: 18px; text-align: center">
                                <i class="fas fa-id-card" style="font-size: 20px;"></i>
                                <span class="nav-link-text">Cetak Kartu Peserta</span>
                            </a>
                        </li> -->




                        <!-- Divider -->
                        <hr class="my-2">
                        <li class="nav-item dropdown">
                            <a style="font-size: 18px; text-align: center" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-money-bill-wave" style="font-size: 20px;"></i>
                                <span class="nav-link-text">Cetak Kartu Peserta</span>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right">
                                <!-- List group -->
                                <div class="list-group list-group-flush">
                                    <a href="{{url('/user/kartu-peserta-electra')}}" class="list-group-item list-group-item-action">
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
                                    <a href="{{url('/user/kartu-peserta-baronas')}}" class="list-group-item list-group-item-action">
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
                                    <a href="{{url('/user/kartu-peserta-evolve')}}" class="list-group-item list-group-item-action disabled">
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
                    <ul class="navbar-nav align-items-center  ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle">
                                        <!-- <img alt="Image placeholder" src="/img/user/topik.png"> -->
                                        <i class="fas fa-user fa-lg"></i>
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <a href="{{ url('/user/akun') }}" class="dropdown-item">
                                    <span>Change password</span>
                                </a>
                                <a href="{{ route('user.logout') }}" class="dropdown-item">
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        @yield('container')



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
</body>

</html>
