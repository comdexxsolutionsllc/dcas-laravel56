<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class TicketStatusTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\TicketStatus::class, 15)->create();
    }
}
