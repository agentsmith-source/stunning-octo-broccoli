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

Route::get('/srdjan/igor', function () {
    return view('welcome');
});

Route::get('/register', 'UserWebController@register');
Route::post('/register', 'UserWebController@store');

Route::get('/users', 'UserWebController@index');

