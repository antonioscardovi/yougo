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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
 * Users
 * */
Route::resource('users', 'User\UserController', [
    'middleware' => 'auth'
]);

/*
 * Vehicles
 * */
Route::resource('vehicles', 'Vehicle\VehicleBackendController', [
    'middleware' => 'auth'
]);


/*
 * Customers
 * */
Route::resource('customers', 'Customer\CustomerBackendController', [
    'only' => ['index', 'show', 'edit', 'destroy'],
    'middleware' => 'auth'
]);


/*
 * Reservations
 * */
Route::resource('reservations', 'Reservation\ReservationBackendController', [
    'only' => ['index', 'show', 'destroy'],
    'middleware' => 'auth'
]);

/*
* Auth
* */
Auth::routes();


/*
* Statistics
* */
Route::resource('home', 'Statistic\StatisticController', [
    'only' => ['index'],
    'middleware' => 'auth'
]);

Route::get('/', 'HomeController@index')->name('home');