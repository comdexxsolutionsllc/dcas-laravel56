<?php

use Faker\Generator as Faker;
use Modules\Support\Entities\MachineNotes;

$factory->define(\Modules\Support\Entities\MachineNoteAttachments::class, function (Faker $faker) {
    return [
        'note_id'   => $faker->randomElement(MachineNotes::pluck('id')->toArray()),
        'file_name' => $faker->word . $faker->fileExtension,
    ];
});
