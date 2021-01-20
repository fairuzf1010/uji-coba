@extends('layout/template-user')

    @section('title', 'Konfirmasi Pembayaran | Evolution 2021')

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
                                <li class="breadcrumb-item"><a style="color: #172B4D">Pembayaran</a></li>
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
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: xx-large; text-align: center;">
                            <img src="/img/brand/BARONAS_FULL.png" alt="">
                            <!-- LOGO BARONAS -->
                        </h5>

                        <div class="row">
                            <div class="col">


                                @if ($baronas['pembayaran_status']==0 && $baronas['email'] != null)
                                <div class="alert alert-default" role="alert">
                                    <!-- 60.000 + 100 + 2 least unique ID -->

                                    @if($baronas['kategori']=='SD')

                                    Silahkan lakukan pembayaran sebesar <strong>Rp 125.000</strong> ke salah satu rekening tercantum

                                    @elseif($baronas['kategori']=='SMP')

                                    Silahkan lakukan pembayaran sebesar <strong>Rp 150.000</strong> ke salah satu rekening tercantum

                                    @elseif($baronas['kategori']=='SMA')

                                    Silahkan lakukan pembayaran sebesar <strong>Rp 175.000</strong> ke salah satu rekening tercantum

                                    @endif


                                    @if($baronas['kategori'] == 'UMUM')
                                   <br>
                                        <strong>Terima Kasih telah mendaftar, untuk saat ini jika anda memilih kategori Umum, anda tidak perlu membayar untuk Penyisihan Awal  </strong>
                                    <br><br>
                                    <strong>** Pembayaran dilakukan jika anda dinyatakan lolos ke tahap Penyisihan 1 **</strong>

                                    @elseif($baronas['kategori']!='UMUM')
                                    <br><br>
                                    <strong>Mandiri</strong>
                                    <br>
                                    140-00-2012922-8
                                    <br>
                                    a.n Nadilah Laksmi
                                    <br><br>
                                    <strong>OVO</strong>
                                    <br>
                                    081334406513
                                    <br>
                                    a.n Nadilah Laksmi

                                @endif
                            </div>
                                @endif

                                @if ($baronas['pembayaran_status']==1 && $baronas['email'] != null)
                                <div class="alert alert-warning alert-block">
                                    Pembayaran sedang kami proses, maksimal dalam 2x24 jam
                                </div>
                                @endif

                                @if ($baronas['pembayaran_status']>=2 && $baronas['email'] != null)
                                <div class="alert alert-success alert-block">
                                    Pembayaran Anda telah berhasil kami terima, silahkan cetak kartu peserta.
                                </div>
                                @endif

                                @if ($baronas['email'] == null)
                                <div class="alert alert-warning alert-block">
                                    <strong>Anda belum mendaftar lomba apapun</strong>
                                </div>
                                @endif



                                @if ($baronas['email'] != null && $baronas['kategori'] != 'UMUM')
                                <div class="card">
                                    <div class="card-body">

                                        <h6 class="heading text-muted mb-4">Konfirmasi Pembayaran</h6>
                                        <form action="{{ route('user.submitBuktiPembayaranBaronas') }}" enctype="multipart/form-data" method="POST" id="pilihan-pembayaran">
                                            @csrf

                                            <div class="form-group">
                                                <label class="form-control-label" for="input-school">Bank Tujuan</label>
                                                <select name="bank_tujuan" class="custom-select custom-select-lg mb-3" {{ $baronas['pembayaran_status']==0 ? '' : 'disabled' }} required>
                                                    <option hidden disabled selected>-- Pilih Bank --</option>
                                                    <option value="Bank Mandiri">Bank Mandiri</option>
                                                    <option value="OVO">OVO</option>
                                                    <option value="LinkAja">LinkAja</option>
                                                    <option value="Bank BNI">Bank BNI</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label" for="input-school">Nama Pengirim</label>
                                                <input name="nama_pengirim" type="text" id="bank-account-number" class="form-control" placeholder="Nama Pengirim" value="{{ $baronas->pembayaran_atas_nama }}" {{ $baronas['pembayaran_status']==0 ? '' : 'readOnly' }} required>
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Unggah Bukti Pembayaran (Format jpg, jpeg)</label>
                                                <input name="file_bukti" accept="image/jpeg" type="file" class="form-control-file" id="bukti-pendaftaran" {{ $baronas['pembayaran_status']==0 ? '' : 'disabled' }} required>
                                            </div>

                                            <button type="submit" value="pembayaran" class="btn text-lighter" style="width: 100%; background-color: #264579;" {{ $baronas['pembayaran_status']==0 ? '' : 'disabled' }}>Submit</button>
                                            <hr class="my-4" />
                                        </form>

                                    </div>
                                </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @endsection
