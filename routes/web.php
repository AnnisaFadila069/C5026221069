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

Route::get('Halo', function () {
    //bisa diisi apa saja
    return "Halo Apa Kabar";
});

Route::get('Halo2', function () {
    return "<h1>Halo Apa Kabar</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('Wardah-LandingPage', function () {
    return view('Wardah-LandingPage');
});

Route::get('Wardah-LandingPage/style', function () {
    return view('style');
});

Route::get('Wardah-LandingPage/contohnrp', function () {
    return view('ContohNRP');
});

Route::get('Wardah-LandingPage/hello', function () {
    return view('hello');
});

Route::get('Wardah-LandingPage/js1', function () {
    return view('js1');
});

Route::get('Wardah-LandingPage/js2', function () {
    return view('js2');
});

Route::get('Wardah-LandingPage/link', function () {
    return view('link');
});

Route::get('Wardah-LandingPage/responsive', function () {
    return view('responsive');
});

Route::get('Wardah-LandingPage/responsive2', function () {
    return view('responsive2');
});

Route::get('Wardah-LandingPage/linktree', function () {
    return view('linktree');
});

Route::get('Wardah-LandingPage/pagination', function () {
    return view('pagination');
});

Route::get('Wardah-LandingPage/prototype', function () {
    return view('prototype');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index' );

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata' );

Route::get('formulir', 'App\Http\Controllers\DosenController@formulir' );
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses' );

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime' );


Route::get('/blog', function () {
    return view('home');
});
Route::get('/blog/tentang', function () {
    return view('tentang');
});
Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD dr pegawai controller.php
Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/lihat/{id}','App\Http\Controllers\PegawaiController@lihat');

//seacrh
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//route CRUD dari keranjangbelanja
Route::get('/keranjangbelanja', 'App\Http\Controllers\KeranjangBelanjaController@indexx');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangBelanjaController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangBelanjaController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangBelanjaController@hapus');

//route CRUD nilaikuliah
Route::get('/nilaikuliah','App\Http\Controllers\nilaiKuliahController@indexNilaiKuliah');
Route::get('/nilaikuliah/tambahNilaiKuliah','App\Http\Controllers\nilaiKuliahController@tambahNilaiKuliah');
Route::post('/nilaikuliah/store','App\Http\Controllers\nilaiKuliahController@store');

//route CRUD dari kabel
Route::get('/kabel', 'App\Http\Controllers\kabelController@indexKabel');
Route::get('/kabel/tambahKabel','App\Http\Controllers\kabelController@tambahKabel');
Route::post('/kabel/store','App\Http\Controllers\kabelController@store');
Route::get('/kabel/editKabel/{id}','App\Http\Controllers\kabelController@editKabel');
Route::post('/kabel/update','App\Http\Controllers\kabelController@update');
Route::get('/kabel/hapusKabel/{id}','App\Http\Controllers\kabelController@hapusKabel');

//route CRUD dari mahasiswa
Route::get('/mahasiswa', 'App\Http\Controllers\mahasiswaController@indexmahasiswa');
Route::get('/mahasiswa/editmahasiswa/{id}','App\Http\Controllers\mahasiswaController@editmahasiswa');
Route::post('/mahasiswa/update','App\Http\Controllers\mahasiswaController@update');
Route::get('/mahasiswa/lihatmahasiswa/{id}','App\Http\Controllers\mahasiswaController@lihatmahasiswa');
//seacrh
Route::get('/mahasiswa/cari','App\Http\Controllers\mahasiswaController@cari');



