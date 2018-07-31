<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class LocationGroupTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\LocationGroup::class, 50)->create();
    }
}
