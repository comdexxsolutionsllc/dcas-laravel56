<?php

use Faker\Generator as Faker;
use Modules\Support\Entities\LocationGroup;

$factory->define(\Modules\Support\Entities\Location::class, function (Faker $faker) {
    return [
        'group_id'             => $faker->randomElement(LocationGroup::pluck('id')->toArray()),
        'location_name'        => $faker->city,
        'location_description' => $faker->sentence,
    ];
});
