@extends('layout/template-user')

@section('title', 'Sertifikat | Evolution 2021')

@section('container')

<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a ><i class="fas fa-home" style="color: #172B4D"></i></a></li>
                            <li class="breadcrumb-item"><a  style="color: #172B4D">Sertifikat</a></li>

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
                    <h3 class="mb-0">Sertifikat Peserta</h3>
                </div>

                <div class="card-body">

                    <div class="row">
                        <div class="col-12 col-md-4" style="width: 100%;">
                            <div class="card" style="width: 100%;">
                                <a style="text-align: center;" href="/img/icons/sertifikat.jpg" class="example-image-link" data-lightbox="example-set"">
                            <img class=" card-img-top p-2" src="/img/icons/sertifikat.jpg" " alt=""  style=" width: 50%; margin: 0 auto;">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: xx-large; text-align: center;">Ketua Tim</h5>
                                    <a href="#" class="btn text-lighter" style="display:flex; justify-content: center; align-items: center; background-color: #264579;">Unduh Sertifkat</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4" style="width: 100%;">
                            <div class="card" style="width: 100%;">
                                <a style="text-align: center;" href="/img/icons/sertifikat.jpg" class="example-image-link" data-lightbox="example-set"">
                            <img class=" card-img-top p-2" src="/img/icons/sertifikat.jpg" " alt=""  style=" width: 50%; margin: 0 auto;">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: xx-large; text-align: center;">Anggota Tim</h5>
                                    <a href="#" class="btn text-lighter" style="display:flex; justify-content: center; align-items: center; background-color: #264579;">Unduh Sertifkat</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4" style="width: 100%;">
                            <div class="card" style="width: 100%;">
                                <a style="text-align: center;" href="/img/icons/sertifikat.jpg" class="example-image-link" data-lightbox="example-set"">
                            <img class=" card-img-top p-2" src="/img/icons/sertifikat.jpg" " alt=""  style=" width: 50%; margin: 0 auto;">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title" style="font-size: xx-large; text-align: center;">Anggota Tim</h5>
                                    <a href="#" class="btn text-lighter" style="display:flex; justify-content: center; align-items: center; background-color: #264579;">Unduh Sertifkat</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            @endsection