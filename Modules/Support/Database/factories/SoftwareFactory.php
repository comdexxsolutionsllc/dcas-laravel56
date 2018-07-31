<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Support\Entities\Software::class, function (Faker $faker) {
    return [
        'software_name' => $faker->word,
        'software_key'  => str_random(50),
    ];
});
