@extends('layout/template-admin')

@section('title', 'Edit Data Peserta Baronas | Evolution 2021')

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
                            <li class="breadcrumb-item"><a href="#" style="color: #172B4D">Edit Peserta Baronas</a></li>
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
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-body">


                                    @if(Session::has('message'))
                                    <div class="alert {{ Session::get('alert-class') }}">
                                       {{ Session::get('message') }}
                                    </div>
                                    @endif


                                    <form method="POST" enctype="multipart/form-data" action="{{ route('user.updateBaronas', $baronas->id) }}">
                                        @csrf

                                        @method('PATCH')
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Nama Tim</label>
                                            <input type="text" id="nama-tim" name = "nama_tim" class="form-control" placeholder="{{ $baronas->nama_tim }}" value="{{ $baronas->nama_tim }}" maxlength="15" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Kategori</label>
                                            <select name="kategori" id="kategori" class="form-control" >
                                                <option disabled selected value> -- Pilih Kategori -- </option>
                                                <option value="SD">Sekolah Dasar</option>
                                                <option value="SMP">Sekolah Menengah Pertama</option>
                                                <option value="SMA">Sekolah Menengah Atas</option>
                                                <option value="UMUM">Umum</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Nama Ketua</label>
                                            <input type="text" id="nama-ketua" class="form-control" name = "nama_ketua"  placeholder="{{ $baronas->nama_ketua }}" value="{{ $baronas->nama_ketua }}" >
                                        </div>
                                      <!--  <div class="form-group">
                                            <label class="form-control-label" for="input-name">Kelas ( <span class="red-star" style = "color:red">**</span> jika memilih kategori umum, tidak usah diisi <span class="red-star" style = "color:red">**</span>)</label>
                                            <select name="kelas_ketua" id="kelas-ketua" class="form-control" required>
                                                <option disabled selected value> -- Pilih Kelas -- </option>
                                                <option value="10">Kelas X</option>
                                                <option value="11">Kelas XI</option>
                                                <option value="12">Kelas XII</option>
                                            </select>
                                        </div> -->
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Nama Anggota 1</label>
                                            <input type="text" id="nama-anggota" name = "nama_anggota" class="form-control" placeholder="{{ $baronas->nama_anggota }}" value="{{ $baronas->nama_anggota }}"  >
                                        </div>


                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Nama Anggota 2</label>
                                            <input type="text" id="nama-anggotadua" name = "nama_anggotadua" class="form-control" placeholder="{{ $baronas->nama_anggotadua }}"  value="{{ $baronas->nama_anggotadua }}" >
                                        </div>


                                     <!--   <div class="form-group">
                                            <label class="form-control-label" for="input-name">Kelas (<span class="red-star" style = "color:red">**</span> jika memilih kategori umum, tidak usah diisi <span class="red-star" style = "color:red">**</span> )</label>
                                            <select name="kelas_ketua" id="kelas-ketua" class="form-control" required>
                                                <option disabled selected value> -- Pilih Kelas -- </option>
                                                <option value="10">Kelas X</option>
                                                <option value="11">Kelas XI</option>
                                                <option value="12">Kelas XII</option>
                                            </select>
                                        </div> -->





                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Asal Sekolah / Instansi Ketua</label>
                                            <input name="sekolah" type="text" name = "sekolah" id="sekolah" class="form-control" placeholder="{{ $baronas->sekolah }}" value="{{ $baronas->sekolah }}" >
                                        </div>

                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Alamat Sekolah / Instansi Ketua</label>
                                            <input name="alamat_sekolah" type="text" id="alamat-sekolah" class="form-control" placeholder="{{ $baronas->alamat_sekolah }}" value="{{ $baronas->alamat_sekolah }}" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Nama Pembina ( <span class="red-star" style = "color:red">**</span> Jika tidak ada pembina, tolong kasih " - " <span class="red-star" style = "color:red">**</span> )</label>
                                            <input name="nama_pembina" type="text" name = "nama_pembina" id="Pembina" class="form-control" placeholder="{{ $baronas->nama_pembina }}" value="{{ $baronas->nama_pembina }}" >
                                        </div>
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-phone">Nomor HP</label>
                                            <input name="nomor_hp" type="number" id="nomor-hp" class="form-control" placeholder="{{ $baronas->nomor_hp }}" value="{{ $baronas->nomor_hp }}" >
                                        </div>

                                        <button type="submit" value="daftar" class="btn" style="color: white; width: 100%; background-color: #6EB648" >Submit Hasil Edit</button>






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


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        function konfirmasiModal(mHref, mSrc) {
            // alert(mSrc);
            document.getElementById("gambarBuktiPembayaran").src = "{{ url('/storage') }}/" + mSrc;
            document.getElementById("konfirmasiBtnFinal").href = "{{ url('/admin/list/baronas/konfirmasi') }}/" + mHref;
        }

        function hapusModal(mHref) {
            document.getElementById("hapusBtnFinal").href = "{{ url('/admin/list/baronas/delete') }}/" + mHref;
        }
    </script>

    @endsection
