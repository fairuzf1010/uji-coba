@extends('layout/template-user')

@section('title', 'Pendaftaran Electra | Evolution 2021')

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
                <!-- <img src="/img/brand/TEXT_ELECTRA.png" class="card-img-top p-2" alt="Logo Electra" style="width: 50%; margin: 0 auto;"> -->
                <div class="card-body">
                    <h5 class="card-title" style="font-size: xx-large; text-align: center;">
                        <img src="/img/brand/TEXT_ELECTRA.png" alt="">
                    </h5>

                    <div class="row">
                        <div class="col">

                            @if ($electra['pembayaran_status']==0 && $electra['email'] != null)
                            <div class="alert alert-success alert-block">
                                Data pendaftaran telah tersimpan. Silahkan lakukan pembayaran pada menu pembayaran
                            </div>
                            @endif

                            @if ($electra['pembayaran_status']==1)
                            <div class="alert alert-success alert-block">
                                Tim Anda telah berhasil terdaftar di <strong>ELECTRA 2021</strong>
                            </div>
                            @endif

                            <div class="card">
                                <div class="card-body">
                                    <h6 class="heading text-muted mb-4">Pendaftaran Electra</h6>
                                    <form method="POST" enctype="multipart/form-data" action="{{ route('user.daftarElectra') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Nama Tim</label>
                                            <input name="nama_tim" type="text" id="nama-tim" class="form-control" placeholder="Nama Tim" value="{{ $electra->nama_tim }}" maxlength="15" {{ $electra['email']=='' ? '' : 'readOnly' }} required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Nama Ketua</label>
                                            <input name="nama_ketua" type="text" id="nama-ketua" class="form-control" placeholder="Nama Lengkap" value="{{ $electra->nama_ketua }}" {{ $electra['email']=='' ? '' : 'readOnly' }} required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Kelas</label>
                                            <select name="kelas_ketua" id="kelas-ketua" class="form-control" {{ $electra['email']=='' ? '' : 'readOnly' }} required>
                                                <option disabled selected value> -- Pilih Kelas -- </option>
                                                <option value="10">Kelas X</option>
                                                <option value="11">Kelas XI</option>
                                                <option value="12">Kelas XII</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Nama Anggota (*jika hanya 1 peserta silahkan isi '—' pada bagian anggota)</label>
                                            <input name="nama_anggota" type="text" id="nama-anggota" class="form-control" placeholder="Nama Lengkap" value="{{ $electra->nama_anggota }}" {{ $electra['email']=='' ? '' : 'readOnly' }} required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Kelas </label>
                                            <select name="kelas_anggota" id="kelas-ketua" class="form-control" {{ $electra['email']=='' ? '' : 'readOnly' }} required>
                                                <option disabled selected value> -- Pilih Kelas-- </option>
                                                <option value="10">Kelas X</option>
                                                <option value="11">Kelas XI</option>
                                                <option value="12">Kelas XII</option>
                                                <option value="-">—</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Asal Sekolah </label>
                                            <input name="sekolah" type="text" id="sekolah" class="form-control" placeholder="Contoh : SMA Negeri 1 Surabaya" value="{{ $electra->sekolah }}" {{ $electra['email']=='' ? '' : 'readOnly' }} required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Alamat Sekolah </label>
                                            <input name="alamat_sekolah" type="text" id="alamat-sekolah" class="form-control" placeholder="Contoh : Jalan Wijaya Kusuma No. 48 Surabaya" value="{{ $electra->alamat_sekolah }}" {{ $electra['email']=='' ? '' : 'readOnly' }} required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-phone">Nomor HP</label>
                                            <input name="nomor_hp" type="number" id="nomor-hp" class="form-control" placeholder="Contoh : 08123456789" value="{{ $electra->nomor_hp }}" {{ $electra['email']=='' ? '' : 'readOnly' }} required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Unggah Kartu Pelajar/KTP/KK/Surat Pernyataan (Format
                                                jpg, jpeg) *contoh surat pernyataan dapat diunduh di : <a href="https://intip.in/suratelectra" target="blank">intip.in/suratelectra</a>
                                                <br> <br>
                                                Kartu Identitas Ketua (*Ukuran file maksikum 2MB)
                                            </label>
                                            <input name="file_ktp_ketua" accept="image/jpeg" type="file" class="form-control-file" id="bukti-pendaftaran" {{ $electra['email']=='' ? '' : 'disabled' }} required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Kartu Identitas Anggota  (*Ukuran file maksikum 2MB)</label>
                                            <input name="file_ktp_anggota" accept="image/jpeg" type="file" class="form-control-file" id="bukti-pendaftaran" {{ $electra['email']=='' ? '' : 'disabled' }} required>
                                        </div>

                                        <!-- Button trigger modal -->
                                        <!-- <button type="submit" value="daftar" class="btn btn-md" data-toggle="modal" data-target="#daftarelectra" style="color: white ;width: 100%; background-color: #707CAA" {{ $electra['email']=='' ? '' : 'disabled' }}>
                                            Daftar
                                        </button> -->
                                        <button data-target="#daftarelectra" type="submit" value="daftar" class="btn btn-md" style="color: white ;width: 100%; background-color: #707CAA" {{ $electra['email']=='' ? '' : 'disabled' }}>
                                            Daftar
                                        </button>


                                        <!-- Modal -->
                                        <div class="modal fade" id="daftarelectra" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Evoulution 2021
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="text-align: center;">
                                                        <i class="fas fa-question-circle fa-10x" style="color: #707CAA;"></i>
                                                        <br>
                                                        <h3 class="mt-3">Data Sudah Benar ?</h3>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                        <button type="button" class="btn" style="background-color: #707CAA; color: white">Benar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



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
