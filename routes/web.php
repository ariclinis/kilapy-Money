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
Route::get('/','inicio@inicio')->name('inicio');
Route::get('/sobre','inicio@sobre')->name('sobre');

Route::group(['middleware' => ['web']], function()
{
Route::get('/index','inicioUserNormal@index')->name('index');
Route::get('/dadospessoais/create','DadoscomunsController@create')->name('create_dados_pessoais');
Route::post('/dadospessoais/store','DadoscomunsController@store')->name('create_dados_pessoais');
Route::post('/dadospessoais','DadoscomunsController@pegardados')->name('pegar_dados');
});

Route::group(['middleware' => 'web'], function(){
Route::Auth();

Route::get('/usuario','HomeController@dadosUser')->name('usuario');
});

Route::get('./templete', function () {
    return view('templete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
