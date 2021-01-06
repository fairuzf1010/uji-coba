@extends('layout/template-admin')

@section('title', 'Daftar Peserta Electra | Evolution 2021')

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
                            <li class="breadcrumb-item"><a href="#" style="color: #172B4D">Daftar Peserta Electra</a></li>
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
                        <img src="/img/brand/TEXT_ELECTRA.png" alt="">
                    </h5>

                    <div class="row">
                        <div class="col">

                            @if ($notification = Session::get('email-fail'))
                            <div class="alert alert-danger alert-block">
                                <strong>{{ $notification }}</strong>
                            </div>
                            @endif
                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No Peserta</th>
                                                    <th>Tim </th>
                                                    <th>Ketua</th>
                                                    <th>Region</th>
                                                    <th>Pembayaran</th>
                                                    <th>Tanggal Daftar</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($list_electra as $electra)

                                                <?php $e = 1; ?>
                                                <!-- region  -->
                                                @if ( $electra->region == null)
                                                <?php $x = 0;
                                                $y = 0;
                                                $e = 2; ?>
                                                @endif

                                                @if ( $electra->region == 'Jabodetabek')
                                                <?php $x = 1;
                                                $y = 5 ?>
                                                @endif

                                                @if ( $electra->region == 'Banyuwangi')
                                                <?php $x = 1;
                                                $y = 1 ?>
                                                @endif

                                                @if ( $electra->region == 'Madiun')
                                                <?php $x = 0;
                                                $y = 9 ?>
                                                @endif

                                                @if ( $electra->region == 'Tuban')
                                                <?php $x = 0;
                                                $y = 6 ?>
                                                @endif

                                                @if ( $electra->region == 'Semarang')
                                                <?php $x = 1;
                                                $y = 4 ?>
                                                @endif

                                                @if ( $electra->region == 'Malang')
                                                <?php $x = 0;
                                                $y = 5 ?>
                                                @endif

                                                @if ( $electra->region == 'Surabaya')
                                                <?php $x = 0;
                                                $y = 1 ?>
                                                @endif

                                                @if ( $electra->region == 'Sidoarjo')
                                                <?php $x = 0;
                                                $y = 2 ?>
                                                @endif

                                                @if ( $electra->region == 'Bali')
                                                <?php $x = 1;
                                                $y = 6 ?>
                                                @endif

                                                @if ( $electra->region == 'Gresik')
                                                <?php $x = 0;
                                                $y = 3 ?>
                                                @endif

                                                @if ( $electra->region == 'Balikpapan')
                                                <?php $x = 1;
                                                $y = 7 ?>
                                                @endif

                                                @if ( $electra->region == 'Jember')
                                                <?php $x = 1;
                                                $y = 0 ?>
                                                @endif

                                                @if ( $electra->region == 'Kediri')
                                                <?php $x = 0;
                                                $y = 8 ?>
                                                @endif

                                                @if ( $electra->region == 'Mojokerto')
                                                <?php $x = 0;
                                                $y = 4 ?>
                                                @endif

                                                @if ( $electra->region == 'Madura')
                                                <?php $x = 1;
                                                $y = 2 ?>
                                                @endif

                                                @if ( $electra->region == 'Probolinggo')
                                                <?php $x = 0;
                                                $y = 7 ?>
                                                @endif

                                                @if ( $electra->region == 'Solo')
                                                <?php $x = 1;
                                                $y = 3 ?>
                                                @endif

                                                <!-- id  -->
                                                @if ( (($electra->id) / 10) < 1) <?php $a = 0;
                                                                                    $b = 0;
                                                                                    $c = 0;
                                                                                    $d = substr($electra->id, 0, 1); ?> @endif @if ( (($electra->id) / 10) < 10 && (($electra->id) / 10) >= 1) <?php $a = 0;
                                                                                                                                                                                                $b = 0;
                                                                                                                                                                                                $c = substr($electra->id, 0, 1);
                                                                                                                                                                                                $d = substr($electra->id, 1, 1); ?> @endif

                                                        @if ( (($electra->id) / 10) > 10 && (($electra->id) / 10) < 100) <?php $a = 0;
                                                                                                                            $b = substr($electra->id, 0, 1);
                                                                                                                            $c = substr($electra->id, 1, 1);
                                                                                                                            $d = substr($electra->id, 2, 1); ?> @endif @if ( (($electra->id) / 10) > 100) <?php $a = substr($electra->id, 0, 1);
                                                                                                                                                                                                            $b = substr($electra->id, 1, 1);
                                                                                                                                                                                                            $c = substr($electra->id, 2, 1);
                                                                                                                                                                                                            $d = substr($electra->id, 3, 1); ?> @endif







                                                            <tr>
                                                                <td><?= $x . $y . '-' . '10' . $a . '-' . $b . $c . $d . '-' . $e; ?></td>
                                                                <td>{{ $electra->nama_tim }}</td>
                                                                <td>{{ $electra->nama_ketua }}</td>
                                                                <td>
                                                                    @if ($electra->region == '')
                                                                    <span class="badge badge-pill badge-lg badge-success">Online</span>
                                                                    @endif

                                                                    @if ($electra->region != '')
                                                                    <span class="badge badge-pill badge-lg badge-primary">{{ $electra->region }}</span>
                                                                    @endif
                                                                </td>
                                                                <td>

                                                                    @if ($electra->pembayaran_status == 0)
                                                                    <span class="badge badge-pill badge-lg badge-secondary">Menunggu pembayaran</span>
                                                                    @endif

                                                                    @if ($electra->pembayaran_status == 1)
                                                                    <span class="badge badge-pill badge-lg badge-warning">Belum dikonfirmasi</span>
                                                                    @endif

                                                                    @if ($electra->pembayaran_status == 2)
                                                                    <span class="badge badge-pill badge-lg badge-success">LUNAS</span>
                                                                    @endif

                                                                    @if ($electra->pembayaran_status == 3 || $electra->pembayaran_status == 4)
                                                                    <span class="badge badge-pill badge-lg badge-primary">LANGSUNG</span>
                                                                    @endif

                                                                </td>
                                                                <td>{{ $electra->created_at }}</td>
                                                                <td style="text-align: center">
                                                                    <!-- <a href="{{ url('/admin/list/electra/konfirmasi') }}/{{$electra->id}}">coba</a> -->

                                                                    @if ($electra->pembayaran_status == 1)
                                                                    <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#konfirmasi" onclick="konfirmasiModal({{ $electra->id }}, '{{ $electra->pembayaran_bukti }}');">
                                                                        Verifikasi
                                                                    </button>
                                                                    @endif

                                                                    @if ($electra->pembayaran_status == 3)
                                                                    <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#konfirmasiOffline" onclick="konfirmasiModal({{ $electra->id }}, '{{ $electra->pembayaran_bukti }}');">
                                                                        Verifikasi
                                                                    </button>
                                                                    @endif

                                                                    <!-- Button trigger modal -->
                                                                    <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#hapus" onclick="hapusModal({{ $electra->id }});">
                                                                        Hapus
                                                                    </button>

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


    <!-- Modal verifikasi offline -->
    <div class="modal fade" id="konfirmasiOffline" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Evoulution 2021</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
                <div class="modal-body">
                    <h3 class="mt-3">Verifikasi peserta ?</h3>
                </div>
                <div class="modal-footer">
                    <a id="konfirmasiBtnFinalOffline" href="" type="button" class="btn btn-success">Verifikasi !</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="konfirmasi" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Evoulution 2021</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
                <div class="modal-body">
                    <h3 class="mt-3">Verifikasi pembayaran peserta ?</h3>
                </div>
                <img id="gambarBuktiPembayaran" style="width:100%;" src="">
                <div class="modal-footer">
                    <a id="konfirmasiBtnFinal" href="" type="button" class="btn btn-success">Verifikasi !</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="hapus" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Evoulution 2021</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> -->
                <div class="modal-body">
                    <h3 class="mt-3">Hapus data peserta ?</h3>
                </div>
                <div class="modal-footer">
                    <a id="hapusBtnFinal" href="" type="button" class="btn btn-danger">Hapus !</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function konfirmasiModal(mHref, mSrc) {
            // alert(mSrc);
            document.getElementById("gambarBuktiPembayaran").src = "{{ url('/storage') }}/" + mSrc;
            document.getElementById("konfirmasiBtnFinalOffline").href = "{{ url('/admin/list/electra/konfirmasi') }}/" + mHref;
            document.getElementById("konfirmasiBtnFinal").href = "{{ url('/admin/list/electra/konfirmasi') }}/" + mHref;
        }

        function hapusModal(mHref) {
            document.getElementById("hapusBtnFinal").href = "{{ url('/admin/list/electra/delete') }}/" + mHref;
        }
    </script>

    @endsection