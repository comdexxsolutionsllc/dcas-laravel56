<?php

use Faker\Generator as Faker;

$factory->define(\Modules\Support\Entities\TicketAttachments::class, function (Faker $faker) {
    return [
        'ticket_id' => $faker->randomElement(\Modules\Support\Entities\Ticket::pluck('id')->toArray()),
        'file_name' => $faker->randomKey() . $faker->fileExtension,
    ];
});
