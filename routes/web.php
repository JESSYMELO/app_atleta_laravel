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
    return view('principal');
});
Route::get('/cadastro/inserir', function () {
    return view('cadastro.inserir');
});
Route::get('/cadastro/pesquisar', function () {
   return view('cadastro.pesquisar');
});


Route::get('/cadastro/pesquisar','AtletaController@pesquisar');

Route::post('/cadastro/pesquisar', 'AtletaController@pesquisar');

Route::get('/cadastro/inserir', 'AtletaController@mostrar_inserir');

Route::post('/cadastro/inserir', 'AtletaController@inserir');

Route::get('/cadastro/alterar/{id}', 'AtletaController@mostrar_alterar');

Route::post('/cadastro/alterar', 'AtletaController@alterar');

Route::get('/cadastro/excluir/{id}', 'AtletaController@excluir');