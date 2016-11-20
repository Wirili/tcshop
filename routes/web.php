<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('login', 'auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'auth\LoginController@login');
    Route::post('logout', 'auth\LoginController@logout');

    Route::get('dashboard', 'DashboardController@index')->name('dashboard.index');
});