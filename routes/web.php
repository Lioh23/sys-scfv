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


Route::prefix('tecnicos')->group(function () {
    Route::get('/', 'TecnicoController@index')->name('tecnicos.index');
    Route::get('/novo', 'TecnicoController@create')->name('tecnicos.novo');
    Route::post('/store', 'TecnicoController@store')->name('tecnicos.guardar'); 
    Route::get('/delete/{id}', 'TecnicoController@destroy')->name('tecnicos.destroy');
    Route::get('/editar/{id}', 'TecnicoController@edit')->name('tecnicos.edit');
});

Route::get('/layoutTest', function() {
    return view('test');
});
