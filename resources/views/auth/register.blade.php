@extends('layouts.app')
@section('content')

@section('hiasan')

<style>
    input[type="date"]:focus:before,
    input[type="date"]:valid:before {
      content: "";
    }

    input:focus{
        border:none;
        border-color: transparent;
        background-color:none;
        outline:none;
    }



textarea{
    border:none;
}


  </style>



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.min.css">
@endsection







<br>
<br>
<br>
<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card mx-6">
            <div class="card-body p-4">

                <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <center>
                    <h1> <img src="{{asset('logo-baru.png')}}" alt="" style = "width:70px;margin-top:5%;"> </h1> </center>
                    <center><span style = "font-size:30px;"><b>MechTech Webinar</b></span></center>

                    <center><p style = "font-size:20px;"><b>Silakan Mendaftar</b></p></center>
<p>
                    <div class="input-group mb-3" style = "margin-top:10%;">
                        <div class="input-group-prepend">
                           <!-- <span class="input-group-text">
                                <i class="fa fa-user fa-fw"></i>
                            </span> -->
                        </div>
                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.user_name') }}" value="{{ old('name', null) }}" style =  "font-family:'Montserrat','Arial';color:#111; border-top:none;border-right:none;border-left:none;">
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3" style = "margin-top:5%;" >
                        <div class="input-group-prepend">
                          <!--  <span class="input-group-text ">
                                <i class="fa fa-envelope fa-fw"></i>
                            </span> -->
                        </div>
                        <input type="email" name="email" class="form-control no-border {{ $errors->has('email') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;">
                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3" style = "margin-top:5%;">
                        <div class="input-group-prepend">
                        <!--    <span class="input-group-text">
                                <i class="fa fa-lock fa-fw"></i>
                            </span> -->
                        </div>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;">
                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3" style = "margin-top:5%;">
                        <div class="input-group-prepend">
                          <!--  <span class="input-group-text">
                                <i class="fa fa-lock fa-fw"></i>
                            </span> -->
                        </div>
                        <input type="password" name="password_confirmation" class="form-control" required placeholder="{{ trans('global.login_password_confirmation') }}" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;">
                    </div>









                    <div class="input-group mb-3" style = "margin-top:5%;">
                        <div class="input-group-prepend">
                          <!--  <span class="input-group-text">
                                <i class="fa fa-calendar fa-fw"></i>
                            </span> -->
                        </div>
                        <input  type="text" onfocus="(this.type='date')" name="date" class="textbox-n form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" required placeholder="Tanggal Lahir" value = "Tanggal Lahir" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;">
                        @if($errors->has('date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('date') }}
                            </div>
                        @endif
                    </div>


                    <div class="input-group mb-3" style = "margin-top:5%;">
                        <div class="input-group-prepend">
                           <!-- <span class="input-group-text">
                                <i class="fa fa-instagram fa-fw"></i>
                            </span> -->
                        </div>
                        <input type="text" name="instagram" class="form-control{{ $errors->has('instagram') ? ' is-invalid' : '' }}" required placeholder="{{ trans('Instagram') }}" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;">
                        @if($errors->has('instagram'))
                            <div class="invalid-feedback">
                                {{ $errors->first('instagram') }}
                            </div>
                        @endif
                    </div>


                    <div class="input-group mb-3" style = "margin-top:5%;">
                        <div class="input-group-prepend">
                         <!--   <span class="input-group-text">
                                <i class="fa fa-cog fa-fw"></i>
                            </span> -->
                        </div>
                        <input type="text" name="pekerjaan" class="form-control{{ $errors->has('pekerjaan') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('Pekerjaan') }}" value="{{ old('pekerjaan', null) }}" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;">
                        @if($errors->has('pekerjaan'))
                            <div class="invalid-feedback">
                                {{ $errors->first('pekerjaan') }}
                            </div>
                        @endif
                    </div>






                    <div class="input-group mb-3" style = "margin-top:5%;">
                        <div class="input-group-prepend">
                           <!-- <span class="input-group-text">
                                <i class="fa fa-building fa-fw"></i>
                            </span> -->
                        </div>
                        <input type="text" name="instansi" class="form-control{{ $errors->has('instansi') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('Instansi') }}" value="{{ old('name', null) }}" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;">
                        @if($errors->has('instansi'))
                            <div class="invalid-feedback">
                                {{ $errors->first('instansi') }}
                            </div>
                        @endif
                    </div>









                    <div class="input-group mb-3" id="country" style = "display:none; margin-top:5%;" >
                        <div class="input-group-prepend">
                          <!--  <span class="input-group-text">
                                <i class="fa fa-flag fa-fw"></i>
                            </span> -->
                        </div>
                        <select class="custom-select{{ $errors->has('country_id') ? ' is-invalid' : '' }}" id="country_id" name="country_id" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;">
                            <option value="" selected>Provinsi</option>
                            @foreach($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('country_id'))
                            <div class="invalid-feedback">
                                {{ $errors->first('country_id') }}
                            </div>
                        @endif
                    </div>





                     <div class="input-group mb-3" id="state" style = "margin-top:5%;">
                        <div class="input-group-prepend">
                          <!--  <span class="input-group-text">
                                <i class="fa fa-flag fa-fw"></i>
                            </span> -->
                        </div>
                        <select class="custom-select{{ $errors->has('state_id') ? ' is-invalid' : '' }}" id="state_id" name="state_id" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;">
                            <option value="" selected>Provinsi</option>
                            @foreach($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('state_id'))
                            <div class="invalid-feedback">
                                {{ $errors->first('state_id') }}
                            </div>
                        @endif
                    </div>


















                    <div class="input-group mb-3" id="city" style = "margin-top:5%;" >
                        <div class="input-group-prepend">
                         <!--   <span class="input-group-text">
                                <i class="fa fa-building fa-fw"></i>
                            </span> -->
                        </div>
                        <select class="custom-select{{ $errors->has('city_id') ? ' is-invalid' : '' }}" id="city_id" name="city_id" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;">
                            <option value="" selected>Kota</option>
                        </select>
                        @if($errors->has('city_id'))
                            <div class="invalid-feedback">
                                {{ $errors->first('city_id') }}
                            </div>
                        @endif
                    </div>




                    <div class="input-group mb-3" id="area" style = "display:none;"  style = "margin-top:5%;" >
                        <div class="input-group-prepend">
                          <!--  <span class="input-group-text">
                                <i class="fa fa-home fa-fw"></i>
                            </span> -->
                        </div>
                        <select class="custom-select{{ $errors->has('city_id') ? ' is-invalid' : '' }}" id="city_id" name="city_id" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;">
                            <option value="" selected>Kecamatan</option>
                        </select>
                        @if($errors->has('city_id'))
                            <div class="invalid-feedback">
                                {{ $errors->first('city_id') }}
                            </div>
                        @endif
                    </div>





                    <div class="input-group mb-3" id="cityName" style="display:none"  style = "margin-top:5%;">
                        <div class="input-group-prepend">
                          <!--  <span class="input-group-text">
                                <i class="fa fa-building fa-fw"></i>
                            </span> -->
                        </div>
                        <input type="text" id="city_name" name="city_name" class="form-control{{ $errors->has('city_name') ? ' is-invalid' : '' }}" placeholder="City" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;">
                        @if($errors->has('city_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('city_name') }}
                            </div>
                        @endif
                    </div>



                    <div class="input-group mb-3"  style = "margin-top:5%;">
                        <div class="input-group-prepend">
                       <!--     <span class="input-group-text">
                                <i class="fa fa-building fa-fw"></i>
                            </span> -->
                        </div>
                        <input type="text" name="kecamatan" class="form-control{{ $errors->has('kecamatan') ? ' is-invalid' : '' }}" required placeholder="{{ trans('Kecamatan') }}" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;">
                        @if($errors->has('kecamatan'))
                            <div class="invalid-feedback">
                                {{ $errors->first('kecamatan') }}
                            </div>
                        @endif
                    </div>



                    <div class="input-group mb-3"  style = "margin-top:5%;">
                        <div class="input-group-prepend">
                           <!-- <span class="input-group-text">
                                <i class="fa fa-home fa-fw"></i>
                            </span> -->
                        </div>
                        <input type="text" name="alamat" class="form-control{{ $errors->has('alamat') ? ' is-invalid' : '' }}" required placeholder="{{ trans('Alamat') }}" style =  "font-family:'Montserrat','Arial';color:#111;border-top:none;border-right:none;border-left:none;" >
                        @if($errors->has('alamat'))
                            <div class="invalid-feedback">
                                {{ $errors->first('alamat') }}
                            </div>
                        @endif
                    </div>







                    <div class="input-group mb-3" style = "margin-top:5%;margin-bottom:10%;">
                        <div class="input-group-prepend">
                            <!-- <span class="input-group-text">
                               <i class="fa fa-user fa-fw"></i>
                            </span>-->
                        </div>
                       <!-- <label for="tanya"> Pertanyaan yang akan ditanyakan kepada Pemateri</label>-->
                        <textarea style = "font-family:'Montserrat','Arial';color:#111;text-align:left;" required placeholder = "{{ trans('Pertanyaan yang akan ditanyakan kepada Pemateri') }}"   id="tanya" name="tanya" class = "form-control" rows="10" cols="50" >Pertanyaan yang akan ditanyakan kepada Pemateri
                            </textarea>



                        @if($errors->has('tanya'))
                            <div class="invalid-feedback">
                                {{ $errors->first('tanya') }}
                            </div>
                        @endif
                    </div>











                    <div class="input-group mb-3" id="city" style = "margin-top:10%;" >
                        <div class="input-group-prepend">

                        </div>








                        <button class="btn btn-block btn-dark mt-1" style =  "font-family:'Montserrat','Arial';color:white;" id = "btn_result">
                            {{ trans('Daftar') }}
                        </button>


                    </div>


                </p>
                </form>
            </div>

        </div>

    </div>
    <br>
</div>
<br><br><br>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {

    $('#country_id').change(function() {
        $('#state_id, #city_id, #city_name').val("");
        if($('#country_id option:selected').text() == "United States") {
           $('#cityName').hide(150);
            $('#city_id').html('<option value="" selected>Pilih Kota</option>');
            $('#state, #city').show(150);
       } else {
            $('#state, #city').hide(150);
            $('#cityName').show(150);
        }
    });



    $('#state_id').change(function() {
        var $city = $('#city_id');
        $.ajax({
            url: "{{ route('cities.index') }}",
            data: {
                state_id: $(this).val()
            },
            success: function(data) {
                $city.html('<option value="" selected>Pilih Kota</option>');
                $.each(data, function(id, value) {
                    $city.append('<option value="'+id+'">'+value+'</option>');
                });
                $('#city').show(150);
            }
        });
    });
});
</script>



@endsection
