<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\Location::class, 75)->create();
    }
}
