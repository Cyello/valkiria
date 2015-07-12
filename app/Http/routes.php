<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Rotas Almoxarifado */
Route::get('almoxarifado','AlmoxarifadoController@lista');
Route::get('almoxarifado/exibir/{id}','AlmoxarifadoController@exibir');
Route::get('almoxarifado/editar/{id}','AlmoxarifadoController@editar');

Route::post('almoxarifado/editar/{id}','AlmoxarifadoController@editar');
Route::get('almoxarifado/deletar/{id}','AlmoxarifadoController@deletar');
Route::post('almoxarifado/cadastrar','AlmoxarifadoController@cadastrar');
/* Fim Almoxarifado*/

/* Rotas Itens */
// get
Route::get("itens", "ItemController@listar");
Route::get("itens/exibir/{id}", "ItemController@exibir");
Route::get("itens/editar/{id}", "ItemController@editar");

// post
/* Fim Rotas Itens*/
