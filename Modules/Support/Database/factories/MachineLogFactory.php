<?php

use App\User;
use Faker\Generator as Faker;
use Modules\Support\Entities\Machine;

$factory->define(\Modules\Support\Entities\MachineLog::class, function (Faker $faker) {
    return [
        'machine_id'  => $faker->randomElement(Machine::pluck('id')->toArray()),
        'user_id'     => $faker->randomElement(User::pluck('id')->toArray()),
        'log_content' => $faker->paragraph,
    ];
});
