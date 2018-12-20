<?php

use Illuminate\Http\Request;

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

Route::get('model_inventaris','ModelInventarisController@index');
Route::post('model_inventaris','ModelInventarisController@create');
Route::put('/model_inventaris/{id_barang}','ModelInventarisController@update');

Route::delete('/model_inventaris/{id_barang}','ModelInventarisController@delete');
