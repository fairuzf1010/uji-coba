@extends('layouts.admin')
@section('content')





                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Halaman Responden</div>

                                    <div class="card-body">


                                        <table class="table" style = "text-align:center">
                                            <thead class="thead-dark">
                                              <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Tanggal Daftar</th>
                                                <th scope="col">Instagram</th>
                                                <th scope = "col" > Pekerjaan </th>
                                                <th  scope="col"> Instansi  </th>
                                                <th scope = "col" > Kecamatan </th>
                                                <th  scope="col"> Alamat </th>
                                                <th  scope="col"> Kota </th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                        @foreach($user as $pengguna)
                                              <tr>
                                                <th scope="row">{{$pengguna->id}}</th>
                                                <td>{{$pengguna->name}}</td>
                                                <td>{{$pengguna->email}}</td>
                                                <td>{{$pengguna->created_at}}</td>
                                                <td>  {{$pengguna->instagram}}</td>
                                                <td> {{$pengguna->pekerjaan}} </td>
                                                <td>  {{$pengguna->instansi}}</td>
                                                <td> {{$pengguna->kecamatan}} </td>
                                                <td>  {{$pengguna->Alamat}}</td>
                                                <td>  {{$pengguna->city_id}}</td>
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
