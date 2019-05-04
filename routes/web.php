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
    return view('home');
})->name('home');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//EQUIPAMENTOS
Route::get('/equipamento', ['as' => 'equipamento.index', 'uses' => 'EquipamentoController@index']);
Route::get('/equipamento/deletar/{id}', ['as' => 'equipamento.deletar', 'uses' => 'EquipamentoController@destroy']);
Route::get('/equipamento/adicionar', ['as' => 'equipamento.adicionar', 'uses' => 'EquipamentoController@create']);
Route::post('/equipamento/salvar', ['as' => 'equipamento.salvar', 'uses' => 'EquipamentoController@store']);

Route::get('/equipamento/editar/{id}', ['as' => 'equipamento.editar', 'uses' => 'EquipamentoController@edit']);

Route::put('/equipamento/atualizar/{id}', ['as' => 'equipamento.atualizar', 'uses' => 'EquipamentoController@update']);

//RESERVAS

Route::get('/reservas', "ReservasController@index")->name('reservas.index');
Route::get('/reservas/adicionar/', "ReservasController@create")->name('reservas.adicionar');
Route::post('/reservas/salvar', 'ReservasController@save')->name('reservas.salvar');