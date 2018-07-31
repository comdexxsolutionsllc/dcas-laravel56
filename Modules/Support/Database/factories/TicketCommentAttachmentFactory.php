<?php

use Faker\Generator as Faker;
use Modules\Support\Entities\Comment;

$factory->define(\Modules\Support\Entities\TicketCommentAttachments::class, function (Faker $faker) {
    return [
        'comment_id' => $faker->randomElement(Comment::pluck('id')->toArray()),
        'file_name'  => $faker->randomKey() . $faker->fileExtension,
    ];
});
