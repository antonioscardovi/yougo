<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

/*
 * Vehicles
 * */
Route::resource('vehicles', 'Vehicle\VehicleController', ['only' => ['index', 'show']]);


/*
 * Customers
 * */
Route::resource('customers', 'Customer\CustomerController', ['except' => ['create', 'edit']]); // 'except' create edit


/*
 * Reservations
 * */
Route::resource('reservations', 'Reservation\ReservationController', ['except' => ['update', 'edit']]);


//
///*
// * Transaction
// * */
//Route::resource('transactions', 'Transaction\TransactionController');
//