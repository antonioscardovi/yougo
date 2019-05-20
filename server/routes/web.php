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

//Route::get('/', function () {
//    return view('home');
//});

//Route::get('/vehicles', function () {
//    return view('vehicles');
//});
//
//Route::get('/login', function () {
//    return view('login');
//});
//
//Route::get('/registration', function () {
//    return view('registration');
//});


Route::get('/dashboard', 'PagesController@index');

// Vehicles
Route::get('/vehicles', 'VehiclesController@index');
Route::get('/vehicles/create', 'VehiclesController@create');
Route::post('/vehicles', 'VehiclesController@store');
Route::get('/vehicles/{vehicle}', 'VehiclesController@show');
Route::get('/vehicles/{vehicle}/edit', 'VehiclesController@edit');
Route::patch('/vehicles/{vehicle}', 'VehiclesController@update');
Route::delete('/vehicles/{vehicle}', 'VehiclesController@destroy');

// Users
Route::get('/users', 'UsersContoller@index');
Route::get('/users/{user}', 'UsersContoller@show');
Route::get('/users/{user}/edit', 'UsersContoller@edit');
Route::patch('/users/{user}', 'UsersContoller@update');
Route::delete('/users/{user}', 'UsersContoller@destroy');