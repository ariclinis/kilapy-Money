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
Route::get('/index','inicioUserNormal@index')->name('index');
Route::group(['middleware' => ['web']], function()
{

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
