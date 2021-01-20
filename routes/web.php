<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/login', function () {
    if (Auth::check())
        if (Auth::user()->email == 'evolutionelektroits@gmail.com')
            return redirect('/admin/dashboard');
        else
            return redirect('/user/dashboard');
    else
        return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/user/daftar/electra', 'UserController@daftarElectra')->name('user.daftarElectra');
Route::post('/user/daftar/baronas', 'UserController@daftarBaronas')->name('user.daftarBaronas');
Route::post('/user/daftar/baronas-sd', 'UserController@daftarBaronasSd')->name('user.daftarBaronasSd');
Route::post('/user/daftar/baronas-smp', 'UserController@daftarBaronasSmp')->name('user.daftarBaronasSmp');
Route::post('/user/daftar/baronas-sma', 'UserController@daftarBaronasSma')->name('user.daftarBaronasSma');
Route::post('/user/daftar/baronas-umum', 'UserController@daftarBaronasUmum')->name('user.daftarBaronasUmum');



Route::post('/user/upload-link-baronas', 'UserController@uploadBaronas')->name('user.uploadBaronas');
Route::post('/user/upload-link-baronas/smp', 'UserController@uploadBaronasSMP')->name('user.uploadBaronasSMP');
Route::post('/user/upload-link-baronas/sma', 'UserController@uploadBaronasSMA')->name('user.uploadBaronasSMA');
Route::post('/user/upload-link-baronas/umum', 'UserController@uploadBaronasUmum')->name('user.uploadBaronasUmum');




Route::post('/admin/tambah/', 'UserController@daftarElectraAdmin')->name('user.daftarElectraAdmin');
Route::post('/user/pembayaran-electra', 'UserController@submitBuktiPembayaranElectra')->name('user.submitBuktiPembayaranElectra');
Route::post('/user/pembayaran-baronas', 'UserController@submitBuktiPembayaranBaronas')->name('user.submitBuktiPembayaranBaronas');

Route::post('/register', 'UserController@register')->name('user.register');
Route::post('/login', 'UserController@login')->name('user.login');
Route::get('/logout', 'UserController@logout')->name('user.logout');
Route::get('/verifikasi/{email}', 'UserController@verifikasiAkun');


Route::group(['middleware' => 'CheckLogin'], function () {

    //----------USER ROUTES---------//
    Route::get('/user/dashboard', function () {
        return view('user.dashboard');
    });

    Route::get('/user/daftar', function () {
        return view('user.daftar');
    });

    Route::get('/user/daftar/electra', 'UserController@formElectra');

    //Route::get('/user/daftar/baronas', function () {
      //  return view('user.form-baronas');
   // });

  //  Route::get('/user/daftar/baronas', function () {
  //      return view('user.form-baronassementara');
  //  });

  //  Route::get('/user/daftar/baronas-sd', function () {
   //     return view('user.form-baronas-sd');
  //  });

  //  Route::get('/user/daftar/baronas-smp', function () {
  //      return view('user.form-baronas-smp');
  //  });

  //  Route::get('/user/daftar/baronas-sma', function () {
   //     return view('user.form-baronas-sma');
  //  });

  //  Route::get('/user/daftar/baronas-umum', function () {
  //      return view('user.form-baronas-umum');
  //  });







    Route::get('/user/daftar/baronas', 'UserController@formBaronas');
    //Route::get('/user/daftar/baronas-sd', 'UserController@formBaronasSd');
    //Route::get('/user/daftar/baronas-smp', 'UserController@formBaronasSmp');
    //Route::get('/user/daftar/baronas-sma', 'UserController@formBaronasSma');
   // Route::get('/user/daftar/baronas-umum', 'UserController@formBaronasUmum');





   Route::get('/user/upload-link-baronas', 'UserController@formuploadBaronas');



    Route::get('/user/daftar/evolve', function () {
        return view('user.form-evolve');
    });

    Route::get('/user/sertifikat', function () {
        return view('user.sertifikat');
    });

    Route::get('/user/akun', function () {
        return view('user.akun');
    });

    Route::get('/user/file', function () {
        return view('user.file');
    });

    Route::get('/user/pembayaran-electra', 'UserController@userPembayaranElectra');
    Route::get('/user/pembayaran-baronas', 'UserController@userPembayaranBaronas');

    Route::post('/user/akun', 'UserController@updatePassword')->name('user.updatePassword');

    Route::get('/user/kartu-peserta-electra', 'UserController@kartuPeserta');

    Route::get('/user/kartu-peserta-electra/unduh', 'UserController@unduhKartu');



    Route::get('/user/kartu-peserta-baronas', 'UserController@kartuPesertaBaronas');

    Route::get('/user/kartu-peserta-baronas/unduh', 'UserController@unduhKartuBaronas');



    Route::get('/reka', function () {
        return view('dokumen.invoice-bayangan');
    });




    Route::get('/user/view', function () {
        return view('dokumen.kartu-peserta-layout');
    });


    //----------ADMIN ROUTES---------//

    Route::get('admin/export/electra', 'UserController@exportElectra');
    Route::get('admin/export/baronas', 'UserController@exportBaronas');




    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::get('/admin/tambah', function () {
        return view('admin.tambah-peserta');
    });

    Route::get('/admin/tambah-baronas', function () {
        return view('admin.tambah-peserta-baronas');
    });

    Route::get('/admin/list', function () {
        return view('admin.list-terdaftar');
    });

    Route::get('/admin/list/electra', 'UserController@listElectra');
    Route::get('/admin/list/electra/delete/{id}', 'UserController@listElectraDelete');
    Route::get('/admin/list/electra/konfirmasi/{id}', 'UserController@listElectraKonfirmasi');

    //Route::get('/admin/list/baronas', function () {
       // return view('admin.list-baronas');
    //});


    Route::get('/admin/list/baronas', 'UserController@listBaronas');
    Route::get('/admin/list/baronas/delete/{id}', 'UserController@listBaronasDelete');
    Route::get('/admin/list/baronas/konfirmasi/{id}', 'UserController@listBaronasKonfirmasi');


    Route::get('/admin/list/baronas/edit/{id}', 'UserController@editBaronas');
    Route::patch('/admin/list/baronas/edit/{id}', 'UserController@updateBaronas')->name('user.updateBaronas');


    Route::get('/admin/list/evolve', function () {
        return view('admin.list-evolve');
    });

    // Public Storage
    Route::get('storage/{filename}', function ($filename) {
        $path = storage_path('public/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    });
});
