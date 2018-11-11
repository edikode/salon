<?php

Route::get('/login', 'Pelanggan\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Pelanggan\Auth\LoginController@login')->name('login.submit');
Route::post('/logout', 'Pelanggan\Auth\LoginController@logout');
Route::get('/password/reset', 'Pelanggan\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/email', 'Pelanggan\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset/{token}', 'Pelanggan\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('/password/reset', 'Pelanggan\Auth\ResetPasswordController@reset');

Route::get('/', 'Pelanggan\HomeController@index')->name('home');
Route::get('daftar-pelanggan', 'Pelanggan\DaftarPelanggan@index');
Route::post('simpan-pelanggan', 'Pelanggan\DaftarPelanggan@simpan');

Route::get('daftar-pelapak', 'Pelanggan\DaftarPelapak@index');
Route::post('simpan-pelapak', 'Pelanggan\DaftarPelapak@simpan');

Route::get('/{link}', 'Pelanggan\HalamanController@index');

Route::group(['prefix' => 'admin'], function () 
{
	Route::get('/home', 'Admin\HomeAdmin@index')->name('admin.home');
	
	Route::get('/login', 'Admin\AuthAdmin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\AuthAdmin\LoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Admin\AuthAdmin\LoginController@logout');
    Route::get('/password/reset', 'Admin\AuthAdmin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email', 'Admin\AuthAdmin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}', 'Admin\AuthAdmin\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset', 'Admin\AuthAdmin\ResetPasswordController@reset');

    Route::get('profil/hapusgambar/{id}', 'Admin\Profil@hapusgambar');
    Route::resource('/profil', 'Admin\Profil');
    
    Route::get('setting/hapusgambar/{id}', 'Admin\Setting@hapusgambar');
    Route::resource('/setting', 'Admin\Setting');

    Route::get('/data-admin/hapusgambar/{id}', 'Admin\Admin@hapusgambar');
    Route::resource('/data-admin', 'Admin\Admin');

    Route::get('paket/hapusgambar/{id}', 'Admin\Paket@hapusgambar');
    Route::get('/paket/cari', 'Admin\Paket@cari');
    Route::resource('/paket', 'Admin\Paket');
    
    Route::resource('/kategori', 'Admin\Kategori');

    Route::get('/pelapak/cari', 'Admin\Pelapak@cari');
    Route::resource('/pelapak', 'Admin\Pelapak');
    Route::get('/pelanggan/cari', 'Admin\Pelanggan@cari');
    Route::resource('/pelanggan', 'Admin\Pelanggan');
    
    
});


Route::group(['prefix' => 'pelapak'], function () 
{
	Route::get('/home', 'Pelapak\HomePelapak@index')->name('pelapak.home');

    Route::get('/login', 'Pelapak\AuthPelapak\LoginController@showLoginForm')->name('pelapak.login');
    Route::post('/login', 'Pelapak\AuthPelapak\LoginController@login')->name('pelapak.login.submit');
    Route::post('/logout', 'Pelapak\AuthPelapak\LoginController@logout');
    Route::get('/password/reset', 'Pelapak\AuthPelapak\ForgotPasswordController@showLinkRequestForm')->name('pelapak.password.request');
    Route::post('/password/email', 'Pelapak\AuthPelapak\ForgotPasswordController@sendResetLinkEmail')->name('pelapak.password.email');
    Route::get('/password/reset/{token}', 'Pelapak\AuthPelapak\ResetPasswordController@showResetForm')->name('pelapak.password.reset');
    Route::post('/password/reset', 'Pelapak\AuthPelapak\ResetPasswordController@reset');

    Route::get('setting/hapusgambar/{id}', 'Pelapak\Setting@hapusgambar');
    Route::resource('/setting', 'Pelapak\Setting');

    Route::get('paket/hapusgambar/{id}', 'Pelapak\Paket@hapusgambar');
    Route::get('/paket/cari', 'Pelapak\Paket@cari');
    Route::resource('/paket', 'Pelapak\Paket');

    Route::get('/profil-pelapak/hapusgambar/{id}', 'Pelapak\Profil@hapusgambar');
    Route::resource('/profil-pelapak', 'Pelapak\Profil');

    

});






