<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Ask for db migration refresh, default is no
//        if ($this->command->confirm('Do you wish to refresh migration before seeding, it will clear all old data ?')) {
//            // Call the php artisan migrate:refresh
//            $this->command->call('migrate:refresh');
//            $this->command->warn("Data cleared, starting from blank database.");
//        }
        /**
         * @todo
         */
        $this->call(UserTableSeeder::class);
    }
}
