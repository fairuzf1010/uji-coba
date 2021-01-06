@extends('layout/template-admin')

@section('title', 'Data Peserta | Evolution 2021')

@section('container')

<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home" style="color: #172B4D"></i></a></li>
                            <li class="breadcrumb-item"><a href="#" style="color: #172B4D">Daftar Peserta</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-12 col-md-4" style="width: 100%;">
            <div class="card" style="width: 100%;">
                <img src="/img/brand/ELECTRA.png" class="card-img-top p-2" alt="Logo Electra" style="width: 50%; margin: 0 auto;">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: xx-large; text-align: center;">Electra</h5>
                    <a href="{{url('/admin/list/electra')}}" class="btn text-lighter" style="display:flex; justify-content: center; align-items: center; background-color: #264579;">Daftar Peserta Electra</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4" style="width: 100%;">
            <div class="card" style="width: 100%;">
                <img src="/img/brand/BARONAS.png" class="card-img-top p-2" alt="Logo Baronas" style="width: 50%; margin: 0 auto;">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: xx-large; text-align: center;">Baronas</h5>
                    <a href="{{url('/admin/list/baronas')}}" class="btn text-lighter" style="display:flex; justify-content: center; align-items: center; background-color: #264579;">Daftar Peserta Baronas</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4" style="width: 100%;">
            <div class="card" style="width: 100%;">
                <img src="/img/brand/EVOLVE.png" class="card-img-top p-2" alt="Logo Evolve" style="width: 50%; margin: 0 auto;">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: xx-large; text-align: center;">Evolve</h5>
                    <a href="{{url('/admin/list/evolve')}}" class="btn text-lighter" style="display:flex; justify-content: center; align-items: center; background-color: #264579;">Hasil Vote Sementara</a>
                </div>
            </div>
        </div>
    </div>
    @endsection