<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('cities', 'CityController@index')->name('cities.index');
/*Route::get('states', 'StateController@index')->name('states.index');*/
Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    /*Route::get('/home', function()
{
    return view('soviet');
}); */
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/data', 'HomeController@data')->name('adminpage');

Route::get('/wilayah', 'HomeController@wilayah')->name('daftarkota');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
});

Route::post('/send-email', 'HomeController@sendEmail')->name('send.email');
Route::post('/send-notif', 'HomeController@sendNotif')->name('send.notif');
Route::get('/stat', function()
{
    return view('soviet');
});



Route::get('/daftar', function()
{
    return view('auth.daftar');
});


