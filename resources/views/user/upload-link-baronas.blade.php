@extends('layout/template-user')

@section('title', 'Upload Link Video Baronas | Evolution 2021')

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
                            <li class="breadcrumb-item"><a style="color: #172B4D">Upload Link File Baronas</a></li>
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


                            @if ($baronas['upload_status']==3 && $baronas['email'] != null)
                            <div class="alert alert-success alert-block">
                               <b> Data Upload telah tersimpan, semoga anda lolos! </b>
                            </div>
                            @endif



                            @if ($baronas['upload_status']==0 && $baronas['kategori'] != 'UMUM')

                            @if($baronas['email'] != null)
                            <div class="alert alert-warning alert-block">
                                Segera Bayar Untuk Perlombaan Anda agar bisa upload
                            </div>
                            @endif

                            @if($baronas['email'] == null)

                            <div class="alert alert-warning alert-block">
                                <strong>Anda belum mendaftar lomba apapun</strong>
                            </div>

                            @endif


                            @endif


                            @if ($baronas['upload_status']==1 && $baronas['kategori'] != 'UMUM')
                            <div class="alert alert-primary alert-block">
                               Harap Tunggu Konfirmasi Pembayaran
                            </div>
                            @endif


                            @if($baronas['kategori'] != 'UMUM' && $baronas['pembayaran_status'] == 2)



                            <div class="alert alert-default" role="alert">
                                <!-- 60.000 + 100 + 2 least unique ID -->
                                <br>
                                 <b> Berikut merupakan cara untuk mengumpulkan Video Anda</b> <br>
                                &nbsp; <strong> Jika Menggunakan Google Drive di Web</strong>
                                &nbsp; &nbsp;
                                <ol>
                                    <li>Upload file anda ke google drive anda</li>
                                    <li>Klik kanan file anda lalu pilih “dapatkan link”</li>
                                    <li>Klik panah bawah lalu pilih “siapa saja yang memiliki link”</li>
                                    <li>Upload file anda ke google drive anda</li>
                                    <li>Klik panah bawah yang ada di bawahnya, lalu pilih “editor”</li>
                                    <li>Klik “salin link” lalu tempel link ke form upload yang ada di website</li>
                                  </ol>
                                  <br>

                                  &nbsp; <strong> Jika Menggunakan Google Drive di Android </strong>

                                  <ol>
                                    <li>Upload file anda ke google drive anda</li>
                                    <li>Klik kanan file anda lalu pilih “dapatkan link”</li>
                                    <li>Pada menu Link klik “change” lalu pilih “editor”</li>
                                    <li>Upload file anda ke google drive anda</li>
                                    <li>Setelah itu pilih “salin link” lalu kumpulkan link ke form pengumpulan yang telah disediakan oleh peserta</li>
                                  </ol>
                                <br>
                            </div>



                            <div class="card">
                                <div class="card-body">
                                    <h6 class="heading text-muted mb-4" style = "text-align:center;">Form Upload Link File</h6>
                                    <form method="POST" enctype="multipart/form-data" action="{{ route('user.uploadBaronas') }}">
                                        @csrf
                                     <!--   <div class="form-group">
                                            <label class="form-control-label" for="input-name">Kategori</label>
                                            <select name="kategori" id="kategori" class="form-control" {{ $baronas['email']=='' ? '' : 'disabled' }} required>
                                                <option disabled selected value> -- Pilih Kategori -- </option>
                                                <option value="sd">Sekolah Dasar</option>
                                                <option value="smp">Sekolah Menengah Pertama</option>
                                                <option value="sma">Sekolah Menengah Atas</option>
                                                <option value="umum">Umum</option>
                                            </select>
                                        </div> -->

                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Judul File</label>
                                            <input type="text" id="judul-file" name = "judul_file" class="form-control" placeholder="Judul File" value="{{ $baronas->judul_file }}" {{ $baronas['upload_status']==2 ? '' : 'readOnly' }} >
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Deskripsi File</label>
                                      <textarea name="deskripsi_file" id="deskripsi-file" class = "form-control" cols="30" rows="10" placeholder="Deskripsi File" value="{{ $baronas->deskripsi_file }}" {{ $baronas['upload_status']==2 ? '' : 'readOnly' }} required> </textarea>
                                        </div>


                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Link File</label>
                                            <input type="text" id="link-file" name = "link_file" class="form-control" placeholder="Link File" value="{{ $baronas->link_file }}" {{ $baronas['upload_status']==2 ? '' : 'readOnly' }} >
                                        </div>



                                        <button type="submit" value="daftar" class="btn btn-danger" style="color: white; width: 100% " {{ $baronas['upload_status']==2 ? '' : 'disabled' }}>Upload File</button>





                                        <!--  <div class="form-group">
                                            <label class="form-control-label" for="input-name">Kelas ( <span class="red-star" style = "color:red">**</span> jika memilih kategori umum, tidak usah diisi <span class="red-star" style = "color:red">**</span>)</label>
                                            <select name="kelas_ketua" id="kelas-ketua" class="form-control" required>
                                                <option disabled selected value> -- Pilih Kelas -- </option>
                                                <option value="10">Kelas X</option>
                                                <option value="11">Kelas XI</option>
                                                <option value="12">Kelas XII</option>
                                            </select>
                                        </div> -->

                                     <!--   <div class="form-group">
                                            <label class="form-control-label" for="input-name">Kelas (<span class="red-star" style = "color:red">**</span> jika memilih kategori umum, tidak usah diisi <span class="red-star" style = "color:red">**</span> )</label>
                                            <select name="kelas_ketua" id="kelas-ketua" class="form-control" required>
                                                <option disabled selected value> -- Pilih Kelas -- </option>
                                                <option value="10">Kelas X</option>
                                                <option value="11">Kelas XI</option>
                                                <option value="12">Kelas XII</option>
                                            </select>
                                        </div> -->









                                    <!--

                                        <button data-target="#daftarbaronas" type="submit" value="daftar" class="btn btn-md" style="color: white ;width: 100%; background-color: #707CAA" {{ $baronas['email']=='' ? '' : 'disabled' }}>
                                            Daftar
                                        </button>
                                    -->

                                           <!-- Modal -->
                                           <!--
                                           <div class="modal fade" id="daftarbaronas" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Evolution 2021
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

                                    -->

                                        <hr class="my-4" />
                                    </form>

                                </div>
                            </div>

                            @endif






                            @if($baronas['email'] != null && $baronas['kategori'] == 'UMUM')

                            @if($baronas['upload_status'] == 0 && $baronas['kategori'] == 'UMUM')
                            <div class="alert alert-warning alert-block">
                                <strong>Mohon Bersabar, data anda belum dikonfirmasi</strong>
                            </div>
                            @endif


                            @if($baronas['upload_status'] == 1 && $baronas['kategori'] == 'UMUM')
                            <div class="alert alert-success alert-block">
                                <strong>Terima Kasih Sudah Mendaftar <br> Untuk Kategori Umum Bisa Langsung Upload File Tanpa Membayar</strong>
                            </div>
                            @endif


                            @if($baronas['upload_status'] == 2 && $baronas['kategori'] == 'UMUM')
                            <div class="alert alert-success alert-block">
                                <strong>Selamat Anda Sudah Terdaftar</strong>
                            </div>
                            @endif


                            <div class="alert alert-default" role="alert">
                                <!-- 60.000 + 100 + 2 least unique ID -->
                                <br>
                                 <b> Berikut merupakan cara untuk mengumpulkan Video Anda</b> <br>
                                &nbsp; <strong> Jika Menggunakan Google Drive di Web</strong>
                                &nbsp; &nbsp;
                                <ol>
                                    <li>Upload file anda ke google drive anda</li>
                                    <li>Klik kanan file anda lalu pilih “dapatkan link”</li>
                                    <li>Klik panah bawah lalu pilih “siapa saja yang memiliki link”</li>
                                    <li>Upload file anda ke google drive anda</li>
                                    <li>Klik panah bawah yang ada di bawahnya, lalu pilih “editor”</li>
                                    <li>Klik “salin link” lalu tempel link ke form upload yang ada di website</li>
                                  </ol>
                                  <br>

                                  &nbsp; <strong> Jika Menggunakan Google Drive di Android </strong>

                                  <ol>
                                    <li>Upload file anda ke google drive anda</li>
                                    <li>Klik kanan file anda lalu pilih “dapatkan link”</li>
                                    <li>Pada menu Link klik “change” lalu pilih “editor”</li>
                                    <li>Upload file anda ke google drive anda</li>
                                    <li>Setelah itu pilih “salin link” lalu kumpulkan link ke form pengumpulan yang telah disediakan oleh peserta</li>
                                  </ol>
                                <br>
                            </div>





                            <div class="card">
                                <div class="card-body">
                                    <h6 class="heading text-muted mb-4" style = "text-align:center;">Form Upload Link File</h6>
                                    <form method="POST" enctype="multipart/form-data" action="{{ route('user.uploadBaronas') }}">
                                        @csrf
                                     <!--   <div class="form-group">
                                            <label class="form-control-label" for="input-name">Kategori</label>
                                            <select name="kategori" id="kategori" class="form-control" {{ $baronas['email']=='' ? '' : 'disabled' }} required>
                                                <option disabled selected value> -- Pilih Kategori -- </option>
                                                <option value="sd">Sekolah Dasar</option>
                                                <option value="smp">Sekolah Menengah Pertama</option>
                                                <option value="sma">Sekolah Menengah Atas</option>
                                                <option value="umum">Umum</option>
                                            </select>
                                        </div> -->

                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Judul File</label>
                                            <input type="text" id="judul-file" name = "judul_file" class="form-control" placeholder="Judul File" value="{{ $baronas->judul_file }}" {{ $baronas['upload_status']==1 ? '' : 'readOnly' }} >
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Deskripsi File</label>
                                      <textarea name="deskripsi_file" id="deskripsi-file" class = "form-control" cols="30" rows="10" placeholder="Deskripsi File" value="{{ $baronas->deskripsi_file }}" {{ $baronas['upload_status']==1 ? '' : 'readOnly' }} required> </textarea>
                                        </div>


                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Link File( <span class="red-star" style = "color:red">**</span>contoh link : https://intip.in, jadi harus menggunakan https:// sebelumnya <span class="red-star" style = "color:red">**</span> )</label>
                                            <input type="text" id="link-file" name = "link_file" class="form-control" placeholder="Link File" value="{{ $baronas->link_file }}" {{ $baronas['upload_status']==1 ? '' : 'readOnly' }} >
                                        </div>


                                        <button type="submit" value="daftar" class="btn btn-danger" style="color: white; width: 100% " {{ $baronas['upload_status']==1 ? '' : 'disabled' }}>Upload File</button>

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
