@extends('layout/template-admin')

@section('title', 'Daftar Peserta Baronas | Evolution 2021')

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
                            <li class="breadcrumb-item"><a href="#" style="color: #172B4D">Daftar Peserta Baronas</a></li>
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
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No </th>
                                                    <th>Nama Tim</th>
                                                    <th>Email</th>
                                                    <th>Kategori</th>
                                                    <th>Nama Ketua</th>
                                                    <th>Nama Anggota</th>
                                                    <th>Sekolah / Instansi</th>
                                                    <th>Tanggal Daftar</th>
                                                    <th>Status Pembayaran</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1; @endphp
                                                @foreach($list_baronas as $baronas)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $baronas->nama_tim }}</td>
                                                    <td>{{ $baronas->email }}</td>
                                                    <td>{{ $baronas->kategori }}</td>
                                                    <td>{{ $baronas->nama_ketua }}</td>
                                                    <td>{{ $baronas->nama_anggota }}</td>
                                                    <td>{{ $baronas->sekolah }}</td>
                                                    <td>{{ $baronas->created_at }}</td>




                                                    <td>



                                                        @if ($baronas->pembayaran_status == 0)
                                                        <span class="badge badge-pill badge-lg badge-secondary">Menunggu pembayaran</span>
                                                        @endif

                                                        @if ($baronas->pembayaran_status == 1)
                                                        <span class="badge badge-pill badge-lg badge-warning">Belum dikonfirmasi</span>
                                                        @endif

                                                        @if ($baronas->pembayaran_status == 2)
                                                        <span class="badge badge-pill badge-lg badge-success">LUNAS</span>
                                                        @endif






                                                    </td>



                                                    <td style="text-align: center">


                                                        @if ($baronas->pembayaran_status == 1)
                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#konfirmasi" onclick="konfirmasiModal({{ $baronas->id }}, '{{ $baronas->pembayaran_bukti }}');">
                                                            Konfirmasi
                                                        </button>
                                                        @endif




                                                        <!-- Button trigger modal -->
                                                     <!-- <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#konfirmasi">
                                                            Konfirmasi
                                                        </button> -->




                                                        <!-- Modal -->
                                                        <div class="modal fade" id="konfirmasi" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="staticBackdropLabel">Evoulution 2021</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <i class="fas fa-question-circle fa-10x" style="color: #28df99;"></i>
                                                                        <br>
                                                                        <h3 class="mt-3">Konfirmasi Peserta ?</h3>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <img id="gambarBuktiPembayaran" style="width:100%;" src="">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <a id = "konfirmasiBtnFinal" class="btn btn-success" href ="">Konfirmasi !</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>





                                                        <button type="button" href="#!" class="btn bg-primary btn-md" style="color: white;">Edit</button>

                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#hapus" onclick="hapusModal({{ $baronas->id }});">
                                                            Hapus
                                                        </button>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="hapus" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="staticBackdropLabel">Evoulution 2021</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <i class="fas fa-exclamation-circle fa-10x" style="color: #ff4646;"></i>
                                                                        <br>
                                                                        <h3 class="mt-3">Hapus Data ?</h3>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <a class="btn btn-danger" id ="hapusBtnFinal" href ="" type="button">Hapus !</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>




                                                    </td>
                                                </tr>

                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
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
