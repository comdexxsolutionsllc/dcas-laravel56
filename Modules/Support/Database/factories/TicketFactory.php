<?php

use App\User;
use DCAS\Classes\TicketId;
use Faker\Generator as Faker;
use Modules\Support\Entities\Category;

$factory->define(\Modules\Support\Entities\Ticket::class, function (Faker $faker) {
    return [
        'user_id'     => $faker->randomElement(User::pluck('id')->toArray()),
        'category_id' => $faker->randomElement(Category::pluck('id')->toArray()),
        'ticket_id'   => TicketId::generate(),
        'title'       => $faker->sentence,
        'priority'    => $faker->randomElement(range(0, 10)),
        'message'     => $faker->paragraph(4),
        'status'      => $faker->randomElement([
            'Close',
            'Open',
            'On Hold',
            'Pending Customer Response',
        ]),
    ];
});
