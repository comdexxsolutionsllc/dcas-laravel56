<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Support\Entities\Comment::class, 1000)->create();
    }
}
