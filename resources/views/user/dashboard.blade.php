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




                    <ul class="nav nav-tabs mx-4" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="electra-tab" data-toggle="tab" href="#electra" role="tab" aria-controls="home" aria-selected="true"><b>Electra</b></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="baronas-tab" data-toggle="tab" href="#baronas" role="tab" aria-controls="profile" aria-selected="false"><b>Baronas</b></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="evolve-tab" data-toggle="tab" href="#evolve" role="tab" aria-controls="contact" aria-selected="false" style = "display:none;"><b>Evolve</b></a>
                        </li>



                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="electra" role="tabpanel" aria-labelledby="electra-tab">




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
                <div class="tab-pane fade" id="baronas" role="tabpanel" aria-labelledby="baronas-tab">








                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <div class="media-body p-4">

                            <div class="pengertian mb-5">
                                <h3>Apa Itu Baronas ? </h3>
                                <span class="name mb-4 text-sm-6" style="text-align: justify;">
                                    Baronas adalah Lomba Robot Nasional yang diperuntukkan bagi siswa SD, SMP, SMA maupun umum. Baronas diselenggarakan tahun ini dibawah naungan Himpunan Teknik Elektro Institut Teknologi Sepuluh Nopember yang bertujuan untuk memperkenalkan dan mengasah kemampuan masyarakat Indonesia dalam bidang Teknologi Robotika.
                                </span>
                            </div>


                            <div class="timeline mb-5">
                                <h3>Time Line</h3>
                                <span class="name mb-0 text-sm" style="text-align: justify;">

                                    <ul>
                                        <li> Pendaftaran : 25 Januari – 21 Februari</li>
                                        <li>Pengumpulan Video Sd – Sma (Penyisihan I): Deadline 21 Maret 2021</li>
                                          <li> Pengumpulan Video Umum (Penyisihan I): Deadline 26 Maret 2021</li>
                                          <li> Penyisihan tahap II – Final : 2 – 4 April 2021</li>

                                    </ul>

                                </span>
                            </div>
                            <div class="total-hadiah mb-5">
                                <h3>Total Hadiah</h3>
                                <span class="name mb-0 text-sm" style="text-align: justify;">
                                    Total Hadiah yaitu senilai Rp.25.000.000 ++
                                </span>
                            </div>


                            <div class="kategori-open mb-5">
                                <h3>Kategori Open</h3>
                                <span class="name mb-6 text-sm" style="text-align: justify;">
                                    1. SD : The Savior of the Pandemic Era<br>
                                    Pada kategori SD dilombakan robot jenis line tracer analog. Peserta yang berhasil menyelesaika lintasan tercepat dengan mendapatkan poin tertinggi
                                    dan waktu tercepat adalah pemenang. <br>
                                    2. SMP : Sucessor of Quarantine Phase<br>
                                    Kategori SMP didesain untuk menyelesaikan sebuah misi yang diberikan. Robot yang digunakan dalam menyelesaikan misi tersebut berupa robot jenis line tracer analog dan robot transporter yang mampu memindahkan benda-benda kecil.
                                    Robot transporter dioperasikan secara manual. Kategori ini mengharuskan peserta untuk bekerja dalam tim dengan megoperasikan dua jenis robot secara bersamaan untuk menyelesaikan misi. Peserta yang mampu meraih poin tertinggi dan waktu tercepat adalah pemenang <br>
                                    3. SMA : HealthTracer The Pandemic Rescuers <br>
                                    Kategori SMA didesain untuk menyelesaikan sebuah misi yang diberikan. Robot yang digunakan dalam menyelesaikan misi tersebut berupa robot berjenis line tracer microcontroller dan robot yang dapat memindahkan benda-benda kecil. Line tracer microcontroller beroperasi secara otomatis sedangkan robot pemindah barang dioperasikan secara manual.
                                    Tim yang berhasil menyelesaikan misi paling cepat menjadi pemenang. <br>
                                    4. Umum : innovative ideas for new era of robotic technology <br>
                                </span>
                            </div>

                            <div class="info-pendaftaran mb-5">
                                <h3>Informasi Pendaftaran</h3>
                                <span class="name mb-0 text-sm" style="text-align: justify;">

                                    1.	Masuk ke evolution-its.com<br>
                                    2.	Register akun baru dengan username email dan password, kemudian verifikasi akun via email dan aktifkan<br>
                                    3.	Login akun yang telah terdaftar<br>
                                    4.	Pilih menu Pendaftaran, kemudian pilih kategori lomba yang akan diikuti, tiap akun hanya dapat mengikuti satu kategori lomba, pilih (kategori yang diinginkan)<br>
                                    5.	Isi kelengkapan data tim yang diperlukan<br>
                                    6.	Lakukan pembayaran dengan rincian biaya pendaftaran pada setiap kategori sebagai berikut :
                                    <ol type = a>
                                        <li>SD 125.000 (Gel 1) dan 150.000 (Gel 2)</li>
                                        <li>SMP 150.000 (Gel 1) dan 175.000 (Gel 2)</li>
                                          <li>SMA 175.000 (Gel 1) dan 200.000 (Gel 2)</li>
                                          <li>UMUM Penyisihan awal GRATIS ( Bagi yang lolos Penyisihan 1 membayar Rp 200.000)</li>
                                    </ol>
                                    7.	Pilih menu Pembayaran untuk melakukan konfirmasi pembayaran yang telah dilakukan dengan mengisi data serta mengupload bukti pembayaran. Pastikan data tim telah terisi dengan benar!<br>
                                    8.	Pembayaran akan diverifikasi maksimal H+2 setelah upload bukti pembayaran <br>
                                    9.	Setelah diverifikasi, Pendaftar akan dapat mengunduh kartu peserta pada menu Cetak Kartu Peserta dan akan mendapatkan email berupa kwitansi , dan juga track baronas 2021
                                    <br>
                            </div>
                            </span>




                            <div class="promo mb-5">
                                <h3>Promo</h3>
                                <span class="name mb-6 text-sm" style="text-align: justify;">
                                 Daftarkan 3 tim persekolah untuk mendapat DISKON! 50.000
                                </span>
                            </div>




                            <div class="persyaratan-pendaftar mb-5">
                                <h3>Persyaratan Pendaftar</h3>
                                <span class="name mb-6 text-sm" style="text-align: justify;">
                                1. Peserta hanya bisa mendaftar sesuai dengan grade kelas , untuk kategori umum semua peserta bisa mendaftar dari SD – UMUM (diatas umur 7 tahun)<br>
                                2. Satu tim dapat terdiri dari 2 – 3 orang<br>
                                </span>
                            </div>


                            <div class="contact-person mb-5">
                                <h3>Contact Person</h3>
                                <span class="name mb-6 text-sm" style="text-align: justify;">
                                  Silakan Hubungi CP di bawah ini jika ada perihal yang ingin ditanyakan : <br>
                                <ol>
                                 <li>Untuk Informasi Perihal Rules :
                                     <ul>
                                         <li> SD - SMP -> M. Nailil In'am (0853-3139-8779)</li>
                                         <li> UMUM -> Ari Majid Sonhaji (0821-3398-1046)</li>
                                    </ul></li>
                                 <li>Untuk Informasi Perihal Alur Pendaftaran : Agil Bintang ( 0857-5511-2767 )</li>
                                <li>Untuk Informasi Perihal Alur Pembayaran : Agus ( 0896-7095-3491 )</li>
                                <li>Untuk Informasi Perihal Hal Penting : Andhika Arya ( 0896-7095-3491 )</li>
                                </ol>

                                </span>
                            </div>





                        </div>



                    </table>
                </div>














                </div>
                <div class="tab-pane fade" id="evolve" role="tabpanel" aria-labelledby="evolve-tab">...</div>
              </div>









            </div>
        </div>
    </div>

    @endsection
