<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class TicketLogTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\TicketLog::class, 100)->create();
    }
}
