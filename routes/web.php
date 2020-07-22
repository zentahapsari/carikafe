<?php

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
/*
Route::get('/', function () {
    return view('index');
});*/

Auth::routes();
Route::get('/', 'KafeController@index');
Route::get('/kafe/cari','KafeController@cari');
Route::get('/post/{id}','PostController@post');
Route::get('/paket','PostController@paket');
Route::get('/indexpie','PopularitasKafeController@index');
Route::get('/indexpaket','PaketKafeController@index');

// Route::get('/home', 'HomeController@index')->name('home');

// ADMIN WEBSITE (dengan enkripsi)
Route::get('/index/eyJpdiI6IkJsSEdsKzVrNG1Qb05nZU9LZ1FRSXc9PSIsInZhbHVlIjoiXC9mQVpWZkJmVGhMMnlaN0NPZmFEM2c9PSIsIm1hYyI6ImI5OWE0OTZiODI0M2QwMDJiYWFiOTdiZTRlZGEyMWM5MzhmNWNhNjY2OThiMzZjZGU1ODA2ZDllODc2YjEzMWYifQ==', 'CafeController@index');
Route::get('/delete/{id}', 'CafeController@hapus');
Route::post('/update', 'CafeController@update');
Route::post('/store', 'CafeController@store');
Route::get('/tambah', 'CafeController@tambah');

// Route::get('/sewakafe/tambah','SewaKafeController@tambah');
// Route::get('/sewakafe/delete/{id}', 'SewaKafeController@hapus');
// Route::post('/sewakafe/index', 'SewaKafeController@store'); 

// ADMIN PENGELOLA KAFE (login)
Route::get('/dashboard', 'DashboardController@index')->name('home');
Route::get('/dashboard2', 'DashboardController@indexPopuler');
Route::get('/infokafe', 'InfoKafecontroller@index');
Route::get('/edit/{id}', 'CafeController@edit');

/* LAYANAN RESERVASI KAFE */
Route::get('/sewakafe', 'SewaKafeController@index');
Route::post('/sewakafe/index', 'SewaKafeController@store');
Route::post('/daterange/fetch_data', 'DateRangeController@fetch_data')->name('daterange.fetch_data');
Route::get('sewakafe/export/', 'DateRangeController@export');
Route::resource('export', 'ExportController');
Route::get('/postadmin/{id}','PostAdminController@post');


/* LAYANAN RESERVASI KAFE */
Route::get('/sewabarista', 'SewaBaristaController@index');
Route::post('/sewabarista/index', 'SewaBaristaController@store');
Route::post('/datebarista/fetch_data', 'DateBaristaController@fetch_data')->name('datebarista.fetch_data');
Route::get('sewabarista/export/', 'DateBaristaController@export');
Route::resource('export2', 'Export2Controller');
Route::get('/postbarista/{id}','PostBaristaController@post');


