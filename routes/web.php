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

Route::match(['GET', 'POST'], 'login', 'UserController@login');
Route::match(['GET', 'POST'], 'register', 'UserController@register');

Route::get('dashboard', 'DashboardController@page');
Route::get('profile', 'DashboardController@profile');
Route::get('stock', 'DashboardController@stock');
