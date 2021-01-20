@extends('layouts.admin')
@section('content')





                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header"> <b> Halaman Table Wilayah</b></div>

                                    <div class="card-body">

                                        <h2 style = "text-align:center;"> <strong>  TABLE KOTA  </strong>  </h2>
                                        <table class="table" style = "text-align:center">
                                            <thead class="thead-dark">
                                              <tr>
                                                <th scope="col">ID Kota</th>
                                                <th scope="col">Nama Kota/Kabupaten</th>
                                                <th scope="col">ID Provinsi</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($city as $kota)
                                              <tr>

                                                <th scope="row">{{$kota->id}}</th>
                                                <td>{{$kota->name}}</td>
                                                <td> <strong> {{$kota->state_id}}</strong>  </td>

                                             </tr>
                                                 @endforeach


                                            </tbody>
                                        </div>

                                        <div class = "card-body">
                                          </table>



<br><br>

<h2 style = "text-align:center;"> <strong>  TABLE PROVINSI  </strong>  </h2>



<table class="table" style = "text-align:center">


<thead class="thead-dark">
<tr>
<th scope="col">ID Provinsi</th>
<th scope="col">Nama Provinsi</th>


</tr>
</thead>



    <tbody>

        @foreach($state as $provinsi)
<tr>
        <th scope="row">{{$provinsi->id}}</th>

            <td>{{$provinsi->name}}</td>
        </tr>
@endforeach
</tbody>
</table>




                                        <!-- End Form Kirim Email -->
                                    </div>
                                </div>
                            </div>
                        </div>



</div>

@endsection
@section('scripts')
@parent

@endsection
