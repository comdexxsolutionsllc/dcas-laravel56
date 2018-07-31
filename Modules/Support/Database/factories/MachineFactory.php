<?php

use App\User;
use Faker\Generator as Faker;
use Modules\Support\Entities\Location;
use Modules\Support\Entities\MachineType;

$factory->define(\Modules\Support\Entities\Machine::class, function (Faker $faker) {
    return [
        'type_id'      => $faker->randomElement(MachineType::pluck('id')->toArray()),
        'user_id'      => $faker->randomElement(User::pluck('id')->toArray()),
        'location_id'  => $faker->randomElement(Location::pluck('id')->toArray()),
        'machine_name' => $faker->word,
    ];
});
