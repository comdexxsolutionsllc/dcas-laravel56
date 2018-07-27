<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'username'       => $faker->unique()->userName,
        'password'       => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => rand(1, 100) > 42 ? str_random(10) : null,
    ];
});

$factory->state(App\User::class, 'defaultAccount', [
    'name'     => 'Alex Renner',
    'email'    => 'theonlyalexrenner@icloud.com',
    'username' => 'arenner',
]);
