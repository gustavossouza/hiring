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
    return redirect('/Historia/Tops');
});

Route::get("maxItem", "GeralController@totalInfo");

// ROTAS -> USUARIO
Route::group(['prefix'=>'Usuario','as'=>'usuario'],function(){
    // Route::get("topseries", "HistoriaController@topStories");


    //API
    Route::get("ConsultUser", "UsuarioController@consultarUsuario");
    Route::get("atualizacoesPerfil", "UsuarioController@ultimoProfileAtualizacoes");
});

// ROTAS -> HISTORIAS
Route::group(['prefix'=>'Historia','as'=>'historia'],function(){
    // Route::get("topseries", "HistoriaController@topStories");

	Route::get("Tops", "HistoriaController@Tops");
	Route::get("Melhores", "HistoriaController@Melhores");
    Route::get("Novos", "HistoriaController@Novos");
    Route::get("Trabalhos", "HistoriaController@Trabalhos");
	Route::get("Mostrar", "HistoriaController@Mostrar");

    //API
    Route::get("newseries", "HistoriaController@newStories");
    Route::get("topseries", "HistoriaController@topStories");
    Route::get("bestseries", "HistoriaController@bestStories");
    Route::get("showseries", "HistoriaController@showStories");
    Route::get("jobseries", "HistoriaController@jobStories");

    Route::get("atualizacoesitem", "HistoriaController@ultimoItemAtualizacoes");
});

// ROTAS -> HISTORIAS
Route::group(['prefix'=>'Perguntas','as'=>'perguntas'],function(){
    // Route::get("topseries", "HistoriaController@topStories");

    Route::get("Perguntas", "PerguntasController@Ask");

    //API
    Route::get("askstories", "PerguntasController@askStories");
});
