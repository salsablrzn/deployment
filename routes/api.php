<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getBarang','API\barangController@getBarang');
Route::post('createBarang','API\barangController@createBarang');
Route::put('updateBarang/{id}','API\barangController@updateBarang');

Route::get('barang','barcodeController@barang');
Route::post('insertBarang','barcodeController@insert');
Route::put('updateBarang/{id}','barcodeController@edit');