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

use App\Http\Controllers\JawabanController;

Route::get('/', function () {
    return view('table.table');
});

Route::get('/data-table', function () {
    return view('table.datatable');
});

Route::get('/pertanyaan/create', 'PertanyaanController@create');

Route::post('/pertanyaan', 'PertanyaanController@store');
Route::get('/pertanyaan', 'PertanyaanController@index');

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');
