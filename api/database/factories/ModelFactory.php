<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Customer;
use App\Vehicle;
use \App\MakeOfVehicle;
use \App\ModelOfVehicle;
use \App\CustomerVehicle;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| ModelOfVehicle Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

//$factory->define(User::class, function (Faker $faker) {
//    return [
//        'name' => $faker->name,
//        'username' => $faker->userName,
//        'lastname' => $faker->lastName,
//        'email' => $faker->unique()->safeEmail,
//        'email_verified_at' => now(),
//        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//        'remember_token' => Str::random(10),
//        'verified' => $verified = $faker->randomElement([User::VERIFIED_USER, User::UNVERIFIED_USER]),
//        'verification_token' => $verified == User::VERIFIED_USER ? null : User::generateVerificationCode(), // ako je verificiran null inače generator
//        'admin' => $verified = $faker->randomElement([User::ADMIN_USER, User::REGULAR_USER]),
//    ];
//});

$factory->define(App\User::class, function (Faker $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'lastname' => $faker->lastName,
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'verified' => $verified = $faker->randomElement([Customer::VERIFIED_CUSTOMER, Customer::VERIFIED_CUSTOMER]),
        'verification_token' => $verified == Customer::VERIFIED_CUSTOMER ? null : Customer::generateVerificationCode(), // ako je verificiran null inače generator
    ];
});

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'model_id' => factory('App\ModelOfVehicle')->create()->id,
        //'type' => $faker->name,
        'type' => $faker->randomElement(['hatchback', 'supercar', 'limousine', 'electric']), // Dodati kao i u tablici
        'engine_power' => $faker->numberBetween(0, 2500),
        'door_number' => $faker->numberBetween(1, 5),
        'description' => $faker->paragraph(2),
        'image' => $faker->randomElement(['1.jpg', '2.jpg', '3.jpg']), //$faker->image(null,640,480,'vehicle'),
        'status' => $status = $faker->randomElement([Vehicle::AVAILABLE_VEHICLE, Vehicle::UNAVAILABLE_VEHICLE]),
        //'price' => $price = $faker->randomFloat(2,99.99,5000.00),
    ];
});

$factory->define(MakeOfVehicle::class, function (Faker $faker) {
    return [
        //'vehicle_id' => factory('App\Vehicle')->create()->id,
        'name' => $faker->randomElement(['Audi', 'BMW', 'Peugeot']), // Dodati još !!
        //'vehicle_id' => factory('App\Vehicle')->create()->id,
    ];
});


$factory->define(ModelOfVehicle::class, function (Faker $faker) {
    return [
        'make_id' => factory('App\MakeOfVehicle')->create()->id,
        'name' => $faker->randomElement(['A5', 'M4', '307']), // Dodati još !!
    ];
});

$factory->define(Vehicle::class, function (Faker $faker) {
    return [
        'model_id' => factory('App\ModelOfVehicle')->create()->id,
        //'type' => $faker->name,
        'type' => $faker->randomElement(['hatchback', 'supercar', 'limousine', 'electric']), // Dodati kao i u tablici
        'engine_power' => $faker->numberBetween(0, 2500),
        'auto_ac' => $faker->randomElement([Vehicle::HAVE_AUTO_AC, Vehicle::DONT_HAVE_AUTO_AC]),
        'gearbox' => $faker->randomElement([Vehicle::MANUAL_GEARBOX, Vehicle::AUTOMATIC_GEARBOX]),
        'door_number' => $faker->numberBetween(1, 5),
        'description' => $faker->paragraph(2),
        'image' => $faker->randomElement(['1.jpg', '2.jpg', '3.jpg']), //$faker->image(null,640,480,'vehicle'),
        'status' => $status = $faker->randomElement([Vehicle::AVAILABLE_VEHICLE, Vehicle::UNAVAILABLE_VEHICLE]),
        'price' => $price = $faker->randomFloat(2,99.99,5000.00),
    ];
});
$factory->define(CustomerVehicle::class, function (Faker $faker) {
    return [
        'customer_id' => factory('App\Customer')->create()->id,
        'vehicle_id' => factory('App\Vehicle')->create()->id,
        'price_of_reservation' => $price = $faker->randomFloat(2, 99.99, 5000.00),
    ];
});