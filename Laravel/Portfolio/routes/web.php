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

Route::get('/', 'PageController@index');
Route::get('/login', 'PageController@login');
Route::get('/logout', 'PageController@logout');

Auth::routes();

Route::get('/register', 'PageController@register');

Route::post('/login', 'PageController@auth');

Route::post('/api/work', 'ApiController@getInfo');
Route::post('/api/work/edit', 'ApiController@edit');

