<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\Category::class, 50)->create();
    }
}
