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
Route::resource('users', 'User\UserController');

/*
 * Vehicles
 * */
Route::resource('vehicles', 'Vehicle\VehicleBackendController');


/*
 * Customers
 * */
Route::resource('customers', 'Customer\CustomerBackendController'); // 'except' create edit


/*
 * Reservations
 * */
Route::resource('reservations', 'Reservation\ReservationBackendController');
Auth::routes();


/*
* Statistics
* */
Route::resource('home', 'Statistic\StatisticController', ['only' => ['index']]);

Route::get('/', 'HomeController@index')->name('home');