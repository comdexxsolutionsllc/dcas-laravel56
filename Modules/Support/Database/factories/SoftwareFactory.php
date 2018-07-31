<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Support\Entities\Software::class, function (Faker $faker) {
    return [
        'software_name' => $faker->words(3, true),
        'software_key'  => $faker->randomKey(),
    ];
});
