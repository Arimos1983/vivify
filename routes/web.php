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

Route::get('/home', 'HomeController@index')->middleware('mycheck')->name('home');
Route::get('/login', 'LoginController@showLoginForm')->name('login-form');
Route::post('/login', 'LoginController@store')->name('login');
Route::get('/logout', 'LoginController@destroy')->name('logout');
Route::get('/register', 'RegisterController@showRegisterForm')->name('register-form');
Route::post('/register', 'RegisterController@store')->name('register');

