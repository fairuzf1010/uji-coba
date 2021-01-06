@extends('layout/template-admin')

@section('title', 'Tambah Peserta by Admin | Evolution 2021')

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
                            <li class="breadcrumb-item"><a style="color: #172B4D">Tambah Peserta by Admin</a></li>
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
                        <img src="/img/brand/BARONAS_FULL.png" alt="">
                    </h5>

                    <div class="row">
                        <div class="col">

                            @if ($notification = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                Data Tim <strong>"{{ $notification }}"</strong> telah berhasil didaftarkan
                            </div>
                            @endif

                            @if ($notification = Session::get('failed'))
                            <div class="alert alert-danger alert-block">
                                Email : <strong>{{ $notification }}</strong> telah didaftarkan sebelumnnya
                            </div>
                            @endif

                            <div class="card">
                                <div class="card-body">
                                    <h6 class="heading text-muted mb-4">Pendaftaran Baronas</h6>
                                    <form method="POST" enctype="multipart/form-data" action="{{ route('user.daftarElectraAdmin') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Nama Tim</label>
                                            <input name="nama_tim" type="text" id="nama-tim" class="form-control" placeholder="Nama Tim" value="" maxlength="15" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Nama Ketua</label>
                                            <input name="nama_ketua" type="text" id="nama-ketua" class="form-control" placeholder="Nama Lengkap" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Kelas</label>
                                            <select name="kelas_ketua" id="kelas-ketua" class="form-control" required>
                                                <option disabled selected value> -- Pilih Kelas -- </option>
                                                <option value="10">Kelas X</option>
                                                <option value="11">Kelas XI</option>
                                                <option value="12">Kelas XII</option>
                                                <option value="-">—</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Nama Anggota</label>
                                            <input name="nama_anggota" type="text" id="nama-anggota" class="form-control" placeholder="Nama Lengkap" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Kelas </label>
                                            <select name="kelas_anggota" id="kelas-ketua" class="form-control" required>
                                                <option disabled selected value> -- Pilih Kelas-- </option>
                                                <option value="10">Kelas X</option>
                                                <option value="11">Kelas XI</option>
                                                <option value="12">Kelas XII</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Asal Sekolah </label>
                                            <input name="sekolah" type="text" id="sekolah" class="form-control" placeholder="Contoh : SMA Negeri 1 Surabaya" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Alamat Sekolah </label>
                                            <input name="alamat_sekolah" type="text" id="alamat-sekolah" class="form-control" placeholder="Contoh : Jalan Wijaya Kusuma No. 48 Surabaya" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-phone">Email Peserta</label>
                                            <input name="email" type="text" id="nomor-hp" class="form-control" placeholder="Contoh : evolutionelektroits@gmail.com" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label" for="input-phone">Nomor HP</label>
                                            <input name="nomor_hp" type="number" id="nomor-hp" class="form-control" placeholder="Contoh : 08123456789" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Unggah Kartu Pelajar Ketua (Format jpg, jpeg)</label>
                                            <input name="file_ktp_ketua" accept="image/jpeg" type="file" class="form-control-file" id="bukti-pendaftaran" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Unggah Kartu Pelajar Anggota (Format jpg, jpeg)</label>
                                            <input name="file_ktp_anggota" accept="image/jpeg" type="file" class="form-control-file" id="bukti-pendaftaran" required>
                                        </div>
                                        <!-- Region -->
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Region</label>
                                            <select name="region" id="kelas-ketua" class="form-control" required>
                                                <option disabled selected value> -- Pilih Region -- </option>
                                                <option value="Surabaya">Surabaya</option>
                                                <option value="Sidoarjo">Sidoarjo</option>
                                                <option value="Gresik">Gresik</option>
                                            </select>
                                        </div>
                                        <button type="submit" value="daftar" class="btn" style="color: white; width: 100%; background-color: #6EB648">Daftar</button>
                                        <hr class="my-4" />
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