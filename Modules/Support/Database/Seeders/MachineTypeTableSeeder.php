<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class MachineTypeTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\MachineType::class, 25)->create();
    }
}
