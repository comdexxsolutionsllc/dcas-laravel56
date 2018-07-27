<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Support\Entities\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
