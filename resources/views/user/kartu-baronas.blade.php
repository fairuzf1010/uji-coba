@extends('layout/template-user')

@section('title', 'Unduh Kartu Peserta Baronas | Evolution 2021')

@section('container')

<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a><i class="fas fa-home" style="color: #172B4D"></i></a></li>
                            <li class="breadcrumb-item"><a style="color: #172B4D">Kartu Peserta Baronas</a></li>

                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0">Berikut Kartu Peserta untuk Ketua dan Anggota Tim</h3>
                </div>

                <div class="card-body">
                    @if ($status == 0 && $kategori != 'UMUM')
                    <div class="alert alert-warning alert-block">
                        <strong>Segera lakukan pembayaran untuk mengakses kartu peserta</strong>
                    </div>
                    @endif
                    @if ($status == 3 || $status == 1)
                    <div class="alert alert-warning alert-block">
                        <strong>Harap tunggu, data Anda sedang dalam proses verifikasi oleh Admin</strong>
                    </div>
                    @endif
                    @if ($status == -1)
                    <div class="alert alert-warning alert-block">
                        <strong>Anda belum mendaftar lomba apapun</strong>
                    </div>
                    @endif


                    @if ($status == 2 || $status == 4)
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-4" style="width: 100%;">
                            <div class="card" style="width: 100%;">
                                <a style="text-align: center;" class="p-3">
                                    <!-- <img class=" card-img-top p-2" src="/img/dokumen/kartu-peserta.jpg" " alt=""  style=" width: 50%; margin: 0 auto;"> -->
                                    <i style="color: #264579;" class="far fa-id-badge fa-10x"></i>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: xx-large; text-align: center;">Nametag Baronas</h5>
                                    <a href="{{url('/user/kartu-peserta-baronas/unduh')}}" class="btn text-lighter" style="display:flex; justify-content: center; align-items: center; background-color: #264579;">Unduh Nametag</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif







                    @if ($status == 0 && $kategori == 'UMUM')
                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-4" style="width: 100%;">
                            <div class="card" style="width: 100%;">
                                <a style="text-align: center;" class="p-3">
                                    <!-- <img class=" card-img-top p-2" src="/img/dokumen/kartu-peserta.jpg" " alt=""  style=" width: 50%; margin: 0 auto;"> -->
                                    <i style="color: #264579;" class="far fa-id-badge fa-10x"></i>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: xx-large; text-align: center;">Nametag Baronas</h5>
                                    <a href="{{url('/user/kartu-peserta-baronas/unduh')}}" class="btn text-lighter" style="display:flex; justify-content: center; align-items: center; background-color: #264579;">Unduh Nametag</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                        <div class="col-12 col-md-4" style="width: 100%;">
                            <div class="card" style="width: 100%;">
                                <a style="text-align: center;" class="p-3">
                                    <!-- <img class=" card-img-top p-2" src="/img/dokumen/kartu-peserta.jpg" " alt=""  style=" width: 50%; margin: 0 auto;"> -->
                                    <i style="color: #264579;" class="far fa-address-card fa-10x"></i>
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: xx-large; text-align: center;">Nametag Robot Baronas</h5>
                                    <a href="{{url('/user/kartu-peserta-baronas/unduh-nametag-robot')}}" class="btn text-lighter" style="display:flex; justify-content: center; align-items: center; background-color: #264579;">Unduh Nametag Robot</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif



                </div>
            </div>
            @endsection
