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
    return view('home');
});

Route::prefix('panel')->group(function () {

    Route::group([ 'middleware' => 'auth' ], function() {
        Route::prefix('candidato_pais')->group(function() {
            Route::get('', 'App\Http\Controllers\Panel\CandidatoPaisController@list');
            Route::get('insert', 'App\Http\Controllers\Panel\CandidatoPaisController@form');
            Route::get('update/{id}', 'App\Http\Controllers\Panel\CandidatoPaisController@form');
            Route::post('save', 'App\Http\Controllers\Panel\CandidatoPaisController@save');
            Route::get('delete/{id}', 'App\Http\Controllers\Panel\CandidatoPaisController@delete');
            Route::get('restore/{id}', 'App\Http\Controllers\Panel\CandidatoPaisController@restore');
        });
    });





});
