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
        foreach ((new \App\AccountType)->getSeedData() as $accountType) {
            factory(\App\AccountType::class)->create([
                'name'        => $accountType['name'],
                'description' => $accountType['description'],
                'zone'        => $accountType['zone'],
            ]);
        }
    }
}
