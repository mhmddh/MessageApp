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

Route::get('/', 'HomeController@index');

Route::post('/create', 'MessageController@create');

Route::get('/message/{id}', 'MessageController@edit');

Route::put('/edit/{id}', 'MessageController@update');

Route::get('/delete/{id}', 'MessageController@delete');








