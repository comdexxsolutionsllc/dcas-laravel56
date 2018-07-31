<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class SoftwareTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\Software::class, 200)->create();
    }
}
