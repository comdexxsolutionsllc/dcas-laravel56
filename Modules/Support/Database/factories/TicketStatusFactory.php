<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Support\Entities\TicketStatus::class, function (Faker $faker) {
    return [
        'status_name'  => $faker->word,
        'status_color' => $faker->safeHexColor,
    ];
});
