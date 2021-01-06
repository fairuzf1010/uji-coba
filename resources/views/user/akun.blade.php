@extends('layout/template-user')

@section('title', 'Profil | Evolution 2021')

@section('container')
<!-- Header -->
<div class="header pb-6" style="background-color: #1A3055;">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a><i class="fas fa-home" style="color: #172B4D"></i></a></li>
                            <li class="breadcrumb-item"><a style="color: #172B4D">Akun</a></li>

                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page content 1 -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-4 order-xl-2">

        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('user.updatePassword') }}">
                        @csrf
                        <h6 class=" heading-small text-muted mb-4">Informasi</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Alamat Email</label>
                                        <input type="email" id="input-email" class="form-control" value="{{ Auth::user()->email }}" disabled>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Password Lama</label>
                                        <input name="passwordLama" type="password" id="password-lama" class="form-control" placeholder="Password Lama">

                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Address -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Password Baru</label>
                                        <input name="passwordBaru" type="password" id="password-baru" class="form-control" placeholder="Password Baru" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Ulangi Password Baru</label>
                                        <input name="konfirmasiPasswordBaru" type="password" id="konfirmasi-password-baru" class="form-control" placeholder="Ulangi Password Baru" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
                                    </div>
                                </div>

                            </div>
                            @if ($notification = Session::get('failed-lama'))
                            <div class="alert alert-danger alert-block">
                                <strong>{{ $notification }}</strong>
                            </div>
                            @endif

                            @if ($notification = Session::get('failed-baru'))
                            <div class="alert alert-warning alert-block">
                                <strong>{{ $notification }}</strong>
                            </div>
                            @endif

                            @if ($notification = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <strong>{{ $notification }}</strong>
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-7 col-md-10">
                                    <button type="submit" value="updatePassword" class="btn btn-neutral bg-default " style="margin-bottom: -150px; color: white;">Ubah</button>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection