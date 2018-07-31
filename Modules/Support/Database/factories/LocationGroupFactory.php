<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Support\Entities\LocationGroup::class, function (Faker $faker) {
    return [
        'group_name'        => $faker->word,
        'group_description' => $faker->sentence,
    ];
});
