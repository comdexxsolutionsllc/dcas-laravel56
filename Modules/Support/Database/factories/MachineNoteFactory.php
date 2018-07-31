<?php

use Faker\Generator as Faker;
use Modules\Support\Entities\Machine;

$factory->define(\Modules\Support\Entities\MachineNotes::class, function (Faker $faker) {
    return [
        'machine_id'   => $faker->randomElement(Machine::pluck('id')->toArray()),
        'note_content' => $faker->sentence,
    ];
});
