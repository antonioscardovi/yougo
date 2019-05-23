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
Route::resource('vehicles', 'Vehicle\VehicleController');


/*
 * Customers
 * */
Route::resource('customers', 'Customer\CustomerController'); // 'except' create edit


/*
 * Reservations
 * */
Route::resource('reservations', 'Reservation\ReservationController');