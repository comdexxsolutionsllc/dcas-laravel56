<?php

use Illuminate\Database\Seeder;

class AccountTypeTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\AccountType::class, 25)->create();
    }
}
