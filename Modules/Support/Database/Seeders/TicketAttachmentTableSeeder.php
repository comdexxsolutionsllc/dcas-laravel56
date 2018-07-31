<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class TicketAttachmentTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\TicketAttachments::class, 250)->create();
    }
}
