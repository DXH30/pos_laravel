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

Route::get('/', ['uses' => 'LandingController', 'as' => 'landing']);

Route::prefix('auth')->group(function() {
    Route::match(['GET', 'POST'], 'login', ['uses' => 'UserController@login', 'as' => 'login']);
    Route::match(['GET', 'POST'], 'register', ['uses' => 'UserController@register', 'as' => 'register']);
    Route::match(['GET', 'POST'], 'forgot_password', ['uses' => 'UserController@forgot_password', 'as' => 'forgot-password']);
    Route::match(['GET', 'POST'], 'logout', ['uses' => 'UserController@logout', 'as' => 'logout']);
});

Route::get('dashboard', ['uses' => 'DashboardController@page', 'as' => 'dashboard']);
Route::get('profile', ['uses' => 'DashboardController@profile', 'as' => 'profile']);
Route::get('inventory', ['uses' => 'DashboardController@inventory', 'as' => 'inventory']);
