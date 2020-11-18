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

Route::get('deployment', function () {
    return view('tampilan/index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('header', function () {
    return view('tampilan/header');
});

Route::get('footer', function () {
    return view('tampilan/footer');
});

Route::get('sidebar', function () {
    return view('tampilan/sidebar');
});

Route::get('deploy', function () {
    return view('customer/index');
});

Route::get('deploy', function () {
    return view('customer/create');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('customercreate','customerController@create');
Route::get('customerstore', 'customerController@store');
Route::get('customer/create/getstates/{id}','customerController@getStates');
Route::get('customer/create/kecamatan/{id}','customerController@kecamatan');
Route::get('customer/create/kelurahan/{id}','customerController@kelurahan');
Route::get('customerindex','customerController@index');

Route::get('customercreate2','customerController@create2');
Route::get('customer/create2/getstates2/{id}','customerController@getStates2');
Route::get('customer/create2/kecamatan2/{id}','customerController@kecamatan2');
Route::get('customer/create2/kelurahan2/{id}','customerController@kelurahan2');
Route::get('customerstore2', 'customerController@store2');

Route::get('customer', 'customerController@tampil');

Route::get('barcode', 'barcodeController@barcode');
Route::get('barcodeprint', 'barcodeController@printbarcode');
Route::get('barcodeeeprint', 'barcodeController@printbarcodeee');
Route::get('/cetakBarcodeId/{id}','barcodeController@printBarcodeId');
Route::get('barcodescanner', 'barcodeController@scannerbarcode');
Route::get('barcodebarang','barcodeController@index');
Route::get('barcodeStore','barcodeController@store');

Route::get('/location',  'locationController@index');
Route::get('/titikawal',  'locationController@titikAwal');
Route::get('/titikkunjungan',  'locationController@titikKunjungan');
Route::post('/locationStore', 'locationController@store');
Route::get('cetakbarcodelokasi', 'locationController@cetak');
Route::get('cetakbarcodelokasiii', 'locationController@cetakkk');
Route::get('/cetakBarcodeLokasiId/{id}','locationController@cetakBarcodeId');
Route::get('Toko/req-nama-toko/{id}','locationController@getNamaToko');