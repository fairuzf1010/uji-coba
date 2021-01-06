@extends('layout/template-user')

@section('title', 'Selamat Datang | Evolution 2021')

@section('container')

<!-- Header -->
<div class="header pb-6 d-flex align-items-center" style="min-height: 500px; background-image: url(/img/theme/hero.jpeg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-7 col-md-10">
                <h1 class="display-2 text-white mb-5" style="font-size: 50px">SELAMAT DATANG DI EVOLUTION 2021</h1>

            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h1 class="mb-0">PENGUMUMAN</h1>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <div class="media-body p-4">
                            <div class="timeline mb-5">
                                <h3>Time Line</h3>
                                <span class="name mb-0 text-sm" style="text-align: justify;">
                                    - Pendaftaran: 28 Desember 2020 s/d 5 Februari 2021 <br>
                                    - Babak Penyisihan: Sabtu, 13 Februari 2021 <br>
                                    - Babak Semifinal: Minggu, 14 Februari 2021 <br>
                                    - Babak Grand Final: Sabtu, 20 Februari 2021 <br>
                                </span>
                            </div>
                            <div class="info-grup mb-5">
                                <h3>Grup Peserta</h3>
                                <span class="name mb-0 text-sm" style="text-align: justify;">
                                    Peserta yang sudah terdaftar dan memiliki kartu peserta dapat bergabung pada grup telegram peserta ELECTRA 10 pada link : <a href='https://intip.in/InfoELECTRA10' target="blank"> intip.in/InfoELECTRA10</a> <br>
                                    Segala bentuk informasi terkait dengan acara dan teknis disetiap babak nantinya akan diinformasikan di grup tersebut. Terima kasih.
                                </span>
                            </div>
                            <div class="info-pendaftaran mb-5">
                                <h3>Informasi Pendaftaran</h3>
                                <span class="name mb-0 text-sm" style="text-align: justify;">Pendaftaran Online <br>
                                    1. Buka website evolution-its.com <br>
                                    2. Buat akun baru dengan username berupa email dan password kemudian verifikasi <br>
                                    3. Setelah verifikasi silahkan login kembali pada website evolution-its.com <br>
                                    4. Pilih menu “Pendaftaran” dan isi kelengkapan data tim, pastikan memilih “electra”
                                    pada saat mengisi kelengkapan pendaftaran <br>
                                    5. Jika data pendaftaran telah lengkap dan benar, silahkan melakukan pembayaran
                                    biaya pendaftaran pada no. rekening atau no. OVO yang disediakan dan wajib
                                    mengupload bukti transfer pembayaran pada menu “ Pembayaran “ <br>
                                    6. Pendaftar dimohon menunggu verifikasi pembayaran. Pembayaran akan diverifikasi
                                    maksimal H+2 setelah upload bukti pembayaran. <br>
                                    7. Setelah pembayaran diverifikasi, maka seluruh proses registrasi selesai. Pendaftar
                                    akan menerima email kwitansi pembayaran dan dapat mengunduh kartu tanda
                                    peserta pada menu “ Cetak Kartu Peserta “. <br>
                                    8. Kartu peserta wajib diunduh dan digunakan saat Penyisihan ELECTRA 10. <br>
                                    9. Jika lebih dari H+2 pembayaran belum diverifikasi dapat menghubungi CP Electra 10
                                    : 0819 3812 8816 (Rizki NH) <br>
                                    <br>Pendaftaran Offline <br>
                                    1. Pendaftar menghubungi Korlap Region masing-masing pada CP yang telah tersedia
                                    di Guidebook ELECTRA 10 <br>
                                    2. Pendaftar mengisi form pendaftaran yang telah disediakan Korlap Region dan
                                    melunasi biaya pendaftaran. <br>
                                    3. Setelah pendaftar melunasi biaya pendaftaran maka akan mendapatkan checklist
                                    berisi username ( email peserta ) dan password untuk digunakan login ke website
                                    evolution-its.com <br>
                                    4. Pendaftar melakukan login ke web evolution-its.com untuk validasi kelengkapan
                                    data tim dan mengunduh kartu tanda peserta pada menu “ Cetak Kartu Peserta “. <br>
                                    5. Kartu peserta wajib diunduh dan digunakan saat Penyisihan ELECTRA 10. <br>
                                    6. Jika lebih dari H+2 pendaftaran ke Korlap Region dan belum terdapat menu cetak
                                    kartu peserta maka dapat menghubungi CP Electra 10 : 0819 3812 8816 (Rizki NH)
                            </div>
                            </span>
                            <div class="link-penting">
                                <h3>Link Penting</h3>
                                <span class="name mb-0 text-sm" style="text-align: justify;">
                                    1.Guidebook ELECTRA 10 : <a href="https://intip.in/GuidebookELECTRA10" target="blank">intip.in/GuidebookELECTRA10</a> <br>
                                    2. Arsip Soal ELECTRA 10 : <a href="https://intip.in/CekSoalElectra" target="blank">intip.in/CekSoalElectra</a> <br>
                                    3. Grup Peserta ELECTRA 10 : <a href="https://intip.in/InfoELECTRA10" target="blank">intip.in/InfoELECTRA10</a> <br>
                                </span>
                            </div>
                        </div>
                    </table>
                </div>

            </div>
        </div>
    </div>

    @endsection