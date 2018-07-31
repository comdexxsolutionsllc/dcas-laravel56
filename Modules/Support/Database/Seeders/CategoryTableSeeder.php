<?php

namespace Modules\Support\Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Modules\Support\Entities\Category;
use Modules\Support\Entities\CategorySubcategory;
use Modules\Support\Entities\Subcategory;

class CategoryTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        factory(\Modules\Support\Entities\Category::class, 15)->create();
        factory(\Modules\Support\Entities\Subcategory::class, 40)->create();

        $categories = Category::pluck('id')->toArray();
        $subcategories = Subcategory::pluck('id')->toArray();

        for ($i = 1; $i <= count($categories); $i ++) {
            CategorySubcategory::create([
                'category_id'    => $faker->randomElement($categories),
                'subcategory_id' => $faker->randomElement($subcategories),
            ]);
        }
    }
}
