<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Support\Entities\Subcategory::class, function (Faker $faker) {
    return [
        'name' => "Sub.{$faker->word}",
    ];
});
