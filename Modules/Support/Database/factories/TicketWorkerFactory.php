<?php

use App\User;
use Faker\Generator as Faker;
use Modules\Support\Entities\Ticket;

$factory->define(\Modules\Support\Entities\TicketWorkers::class, function (Faker $faker) {
    return [
        'ticket_id' => $faker->randomElement(Ticket::pluck('id')->toArray()),
        'user_id'   => $faker->randomElement(User::pluck('id')->toArray()),
    ];
});
