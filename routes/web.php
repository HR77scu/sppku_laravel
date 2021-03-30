<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// login siswa

Route::get('/login/siswa', 'SiswaLoginController@siswaLogin');
Route::post('/login/siswa/proses', 'SiswaLoginController@login');
// Route::get('/dashboard/siswa/histori', 'SiswaLoginController@index');
route::get('history2','HistoriController@index2');
Route::get('/siswa/logout', 'SiswaLoginController@logout');
// ./



route::group(['middleware' => ['auth','ceklevel:admin,pegawai']], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    // pembayran
    route::resource('pembayaran','PembayaranController');
    route::get('pembayaran/destroy/{id}','PembayaranController@destroy');
    // history
    route::resource('history','HistoriController');

    
});

route::group(['middleware'=>['auth','ceklevel:admin']],function(){
    route::get('/home','HomeController@index')->name('home');
    // petugas
    route::resource('petugas','UserController');
    route::get('petugas/destroy/{id}','UserController@destroy');
    // kelas
    route::resource('kelas','KelasController');
    route::get('kelas/destroy/{id}','KelasController@destroy');
    // spp
    route::resource('spp','SppController');
    route::get('spp/destroy/{id}','SppController@destroy');
    //siswa
    route::resource('siswa','SiswaController');
    //laporan
    Route::get('laporan/create', 'HistoriController@cetakpdf');
});

// Route::get('/home', 'HomeController@index')->name('home');
