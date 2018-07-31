<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class MachineLogTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\MachineLog::class, 250)->create();
    }
}
