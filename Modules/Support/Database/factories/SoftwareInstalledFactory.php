<?php

use Faker\Generator as Faker;
use Modules\Support\Entities\Machine;
use Modules\Support\Entities\Software;

$factory->define(\Modules\Support\Entities\SoftwareInstalled::class, function (Faker $faker) {
    return [
        'software_id' => $faker->randomElement(Software::pluck('id')->toArray()),
        'machine_id'  => $faker->randomElement(Machine::pluck('id')->toArray()),
    ];
});
