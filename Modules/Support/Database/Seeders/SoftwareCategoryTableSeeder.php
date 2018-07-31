<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class SoftwareCategoryTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\SoftwareCategory::class, 150)->create();
    }
}
