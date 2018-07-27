<?php

use Faker\Generator as Faker;

$factory->define(App\AccountType::class, function (Faker $faker) {
    $zones = [
        '*',
        'billing',
        'sales',
        'support',
        'vendor',
    ];

    return [
        'name'        => $faker->unique()->word,
        'description' => $faker->sentence,
        'zone'        => $faker->randomElement($zones),
    ];
});
