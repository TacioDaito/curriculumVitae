<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::group(['prefix' => 'users'], function () {
    Route::get('User/dashboard', 'DashboardController@show');
    Route::get('User/', 'UserController@index');
    Route::get('User/create', 'UserController@create');
    Route::post('User/store', 'UserController@store');
    Route::get('User/edit/{id}', 'UserController@edit');
    Route::post('User/update/{id}', 'UserController@update');
    Route::get('User/delete/{id}', 'UserController@delete');
});