<?php

Route::get('/dashboard', 'PagesController@index');

Route::resource('vehicles', 'VehiclesController');
Route::patch('/vehicle/{vehicle}', 'VehiclesController@update');

// Route::resource('users', 'UsersController');
// Users
// Route::get('/users', 'UsersContoller@index');
// Route::get('/users/{user}', 'UsersContoller@show');
// Route::get('/users/{user}/edit', 'UsersContoller@edit');
// Route::patch('/users/{user}', 'UsersContoller@update');
// Route::delete('/users/{user}', 'UsersContoller@destroy');

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');