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

Route::get('inicia_partida', 'apiController@inicia_partida')->name('inicia_partida');
Route::get('escolhe_inicio', 'apiController@escolhe_inicio')->name('escolhe_inicio');
Route::get('inicia_rodada', 'apiController@inicia_rodada')->name('inicia_rodada');
Route::get('ataque_humano', 'apiController@ataque_humano')->name('ataque_humano');
Route::get('ataque_orc', 'apiController@ataque_orc')->name('ataque_orc');
