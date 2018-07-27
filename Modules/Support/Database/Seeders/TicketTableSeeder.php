<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class TicketTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\Ticket::class, 500)->create();
    }
}