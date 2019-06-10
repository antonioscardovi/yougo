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
* Statistics
* */
Route::resource('home', 'Statistic\StatisticController', [
    'only' => ['index'],
    'middleware' => 'auth'
]);

Route::get('/', 'Statistic\StatisticController@index')->name('home');

/*
* Auth
* */
Auth::routes([
    'reset' => false
]);

/**
* Override the default auth register route to add middleware.
 */
Route::get('register', 'Auth\RegistrationController@showRegistrationForm')->name('register')->middleware('hasInvitation');
Route::get('register/request', 'Auth\RegistrationController@requestInvitation')->name('requestInvitation')->middleware('admin', 'auth');
Route::post('register', 'Auth\RegistrationController@register')->name('register');

/**
 * Invitations group with auth middleware.
 * Eventhough we only have one route currently, the route group is for future updates.
 */
Route::group([
    'middleware' => ['auth', 'admin'],
    'prefix' => 'invitations'
], function() {
    Route::get('', 'InvitationsController@index')->name('showInvitations');
});
/**
 * Route for storing the invitation. Only for guest users.
 */
Route::post('invitations', 'InvitationsController@store')->middleware('admin')->name('storeInvitation');
