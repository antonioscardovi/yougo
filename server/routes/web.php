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

Route::get('/vehicles', 'VehiclesController@index');
Route::get('/vehicles/create', 'VehiclesController@create');

