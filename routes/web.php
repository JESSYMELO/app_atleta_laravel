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


Route::get('/cadastro/pesquisar','AtletaController@pesquisar')->middleware('auth');

Route::post('/cadastro/pesquisar', 'AtletaController@pesquisar')->middleware('auth');

Route::get('/cadastro/inserir', 'AtletaController@mostrar_inserir')->middleware('auth');

Route::post('/cadastro/inserir', 'AtletaController@inserir')->middleware('auth');

Route::get('/cadastro/alterar/{id}', 'AtletaController@mostrar_alterar')->middleware('auth');

Route::post('/cadastro/alterar', 'AtletaController@alterar')->middleware('auth');


Route::get('/cadastro/excluir/{id}', 'AtletaController@excluir')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




