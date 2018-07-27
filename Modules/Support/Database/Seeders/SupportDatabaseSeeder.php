<?php

namespace Modules\Support\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class SupportDatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CategoryTableSeeder::class);
        $this->call(TicketTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
