<?php

use Illuminate\Database\Seeder;

class NavlinkTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Navlink::class, 20)->create();
    }
}
