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
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//EQUIPAMENTOS
Route::get('/', ['as' => 'equipamento.index', 'uses' => 'EquipamentoController@index']);
Route::get('/equipamento/deletar/{id}', ['as' => 'equipamento.deletar', 'uses' => 'EquipamentoController@destroy']);
Route::get('/equipamento/adicionar', ['as' => 'equipamento.adicionar', 'uses' => 'EquipamentoController@create']);
Route::post('/equipamento/salvar', ['as' => 'equipamento.salvar', 'uses' => 'EquipamentoController@store']);

