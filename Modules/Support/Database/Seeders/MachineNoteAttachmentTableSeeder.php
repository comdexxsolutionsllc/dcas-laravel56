<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class MachineNoteAttachmentTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\MachineNoteAttachments::class, 45)->create();
    }
}
