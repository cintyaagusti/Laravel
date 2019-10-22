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
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
});*/

Route::get('/', 'LoginController@login');
Route::get('/HalamanRegister', 'LoginController@register');
Route::get('/HalamanHome', 'HomeController@home');
Route::get('/HalamanPertama', 'HomeController@pertama');
Route::get('/HalamanKedua', 'HomeController@kedua');
Route::get('/HalamanKetiga', 'HomeController@ketiga');