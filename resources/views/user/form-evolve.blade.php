@extends('layout/template-user')

@section('title', 'Voting Evolve | Evolution 2021')

@section('container')

<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a><i class="fas fa-home" style="color: #172B4D"></i></a></li>
                            <li class="breadcrumb-item"><a style="color: #172B4D">Pendaftaran</a></li>
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
        <div class="col-12" style="width: 100%;">
            <div class="card" style="width: 100%;">
                <!-- <img src="/img/brand/ELECTRA.png" class="card-img-top p-2" alt="Logo Electra" style="width: 50%; margin: 0 auto;"> -->
                <div class="card-body">
                    <h5 class="card-title" style="font-size: xx-large; text-align: center;">
                        <img src="/img/brand/EVOLVE_FULL.png" alt="">
                    </h5>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="heading text-muted mb-4">Vote GS Evolve</h3>
                                        <form method="GET">
                                            <label class="form-control-label" style="margin-bottom: 20px;">Silahkan Memilih Bintang Tamu Yang Ingin Kamu Lihat Penampilannya Di Evolve 2021</label>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="option1" id="gs-evolve1" value="Artis-A">
                                                <label class="form-check-label" for="inlineRadio1">Artis A</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="option2" id="gs-evolve2" value="Artis-B">
                                                <label class="form-check-label" for="inlineRadio2">Artis B</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="option3" id="gs-evolve3" value="Artis-C">
                                                <label class="form-check-label" for="inlineRadio1">Artis C</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="option4" id="gs-evolve4" value="Artis-D">
                                                <label class="form-check-label" for="inlineRadio2">Artis D</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="option5" id="gs-evolve5" value="Artis-E">
                                                <label class="form-check-label" for="inlineRadio1">Artis E</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="option6" id="gs-evolve6" value="Artis-F">
                                                <label class="form-check-label" for="inlineRadio2">Artis F</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="option7" id="gs-evolve7" value="Artis-G">
                                                <label class="form-check-label" for="inlineRadio1">Artis G</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="option8" id="gs-evolve8" value="Artis-H">
                                                <label class="form-check-label" for="inlineRadio2">Artis H</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="option9" id="gs-evolve9" value="Artis-I">
                                                <label class="form-check-label" for="inlineRadio1">Artis I</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="radio" name="option10" id="gs-evolve10" value="Artis-J">
                                                <label class="form-check-label" for="inlineRadio2">Artis J</label>
                                            </div>
                                            <button type="submit" value="daftar" class="btn text-lighter" style="width: 100%; margin-top: 20px; background-color: #293462">Vote</button>
                                        </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection