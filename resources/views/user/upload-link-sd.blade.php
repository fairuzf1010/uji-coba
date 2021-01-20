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
                            <li class="breadcrumb-item"><a style="color: #172B4D">Upload Link Video Baronas</a></li>
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



                            @if ($baronasupload['upload_status']==1 && $baronasupload['email'] != null)
                            <div class="alert alert-success alert-block">
                                Data Upload telah tersimpan, semoga anda menjadi pemenang !
                            </div>
                            @endif





                            <div class="card">
                                <div class="card-body">
                                    <h6 class="heading text-muted mb-4" style = "text-align:center;">Form Upload Link Video</h6>
                                    <form method="POST" enctype="multipart/form-data" action="{{ route('user.uploadBaronas') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Kategori</label>
                                            <select name="kategori" id="kategori" class="form-control" {{ $baronasupload['email']=='' ? '' : 'disabled' }} required>
                                                <option disabled selected value> -- Pilih Kategori -- </option>
                                                <option value="sd">Sekolah Dasar</option>
                                                <option value="smp">Sekolah Menengah Pertama</option>
                                                <option value="sma">Sekolah Menengah Atas</option>
                                                <option value="umum">Umum</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Judul Video</label>
                                            <input type="text" id="judul-video" name = "judul_video" class="form-control" placeholder="Judul Video" value="{{ $baronasupload->judul_video }}" {{ $baronasupload['email']=='' ? '' : 'readOnly' }} >
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Deskripsi Video</label>
                                      <textarea name="deskripsi_video" id="deskripsi-video" class = "form-control" cols="30" rows="10" placeholder="Deskripsi Video" value="{{ $baronasupload->deskripsi_video }}" {{ $baronasupload['email']=='' ? '' : 'readOnly' }} required> </textarea>
                                        </div>


                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Link Video</label>
                                            <input type="text" id="link-video" name = "link_video" class="form-control" placeholder="Link Video" value="{{ $baronasupload->link_video }}" {{ $baronasupload['email']=='' ? '' : 'readOnly' }} >
                                        </div>








                                        <button type="submit" value="daftar" class="btn btn-danger" style="color: white; width: 100% " {{ $baronasupload['email']=='' ? '' : 'disabled' }}>Upload</button>





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

                                        <button data-target="#daftarbaronas" type="submit" value="daftar" class="btn btn-md" style="color: white ;width: 100%; background-color: #707CAA" {{ $baronasupload['email']=='' ? '' : 'disabled' }}>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
