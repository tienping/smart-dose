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

Route::post('/trigger', 'TriggerController@save');
Route::get('/check/{minutes}', 'TriggerController@check');
Route::get('/data/dose', 'DataController@dose');
Route::get('/data/all', 'DataController@all');

