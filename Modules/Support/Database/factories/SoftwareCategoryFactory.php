<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Support\Entities\SoftwareCategory::class, function (Faker $faker) {
    return [
        'category_name' => $faker->word,
    ];
});
