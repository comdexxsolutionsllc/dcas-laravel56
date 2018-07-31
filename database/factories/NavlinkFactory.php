<?php

use Faker\Generator as Faker;

$factory->define(App\Navlink::class, function (Faker $faker) {
    return [
        'name'        => $faker->word,
        'description' => $faker->sentence,
        'link'        => $faker->url,
        'component'   => ucfirst($faker->word),
    ];
});
