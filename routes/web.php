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

Route::get('customerindex','customerController@index');

Route::get('customer', 'customerController@tampil');

Route::get('customer/create/getstates/{id}','customerController@getStates');

Route::get('customer/create/kecamatan/{id}','customerController@kecamatan');

Route::get('customer/create/kelurahan/{id}','customerController@kelurahan');

Route::get('barcode', 'barcodeController@barcode');
Route::get('barcodeprint', 'barcodeController@printbarcode');
Route::get('barcodescanner', 'barcodeController@scannerbarcode');