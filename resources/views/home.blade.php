@extends('layouts.admin')
@section('content')





                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">Dashboard</div>

                                    <div class="card-body">


                                        <table class="table" style = "text-align:center">
                                            <thead class="thead-dark">
                                              <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Tanggal Daftar</th>
                                                <th scope="col">Notifikasi Tata Cara Pembayaran</th>
                                                <th scope = "col" > Notif H-7 Pembayaran </th>
                                                <th  scope="col"> Status Pembayaran  </th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                        @foreach($user as $pengguna)
                                              <tr>
                                                <th scope="row">{{$pengguna->id}}</th>
                                                <td>{{$pengguna->name}}</td>
                                                <td>{{$pengguna->email}}</td>
                                                <td>{{$pengguna->created_at}}</td>
                                                <td>

                                                    <form action="{{ route('send.email') }}" method="POST" class="form">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="email" placeholder="Enter Email" value = "{{$pengguna->email}}" style = "display:none;">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name" placeholder="Name" value = "{{$pengguna->name}}" style = "display:none;">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea type="text" class="form-control" name="email_body" placeholder="Enter your message here..." value = "Terima Kasih Telah Mendaftar" style = "display:none;"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary">Kirim Notifikasi</button>
                                                        </div>
                                                    </form></td>

                                                    <td>  <form action="{{ route('send.notif') }}" method="POST" class="form">
                                                        @csrf
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="email" placeholder="Enter Email" value = "{{$pengguna->email}}" style = "display:none;">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name" placeholder="Name" value = "{{$pengguna->name}}" style = "display:none;">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea type="text" class="form-control" name="email_body" placeholder="Enter your message here..." value = "Terima Kasih Telah Mendaftar" style = "display:none;"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-warning">Kirim Notifikasi H-7</button>
                                                        </div>
                                                    </form>  </td>

                                                    <td> <p><input data-id="{{$pengguna->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Sudah" data-off="Belum" {{ $pengguna->status ? 'checked' : '' }}></p></td>

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
