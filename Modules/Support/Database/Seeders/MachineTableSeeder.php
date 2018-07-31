<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class MachineTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\Machine::class, 250)->create();
    }
}
