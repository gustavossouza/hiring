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

Route::get('/', function () {
    return view('welcome');
});

// ROTAS -> HISTORIAS
Route::group(['prefix'=>'Historia','as'=>'site'],function(){
    // Route::get("topseries", "HistoriaController@topStories");


    //API
    Route::get("newseries", "HistoriaController@newStories");
    Route::get("topseries", "HistoriaController@topStories");
    Route::get("bestseries", "HistoriaController@bestStories");
});