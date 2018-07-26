<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);

        $this->runPostSeedCommands();
    }

    protected function runPostSeedCommands(): void
    {
        Artisan::call('passport:install');
        Artisan::call('passport:keys');
    }
}
