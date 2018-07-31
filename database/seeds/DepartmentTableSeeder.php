<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ((new \App\Department)->getSeedData() as $department) {
            factory(\App\Department::class)->create([
                'name'        => $department['name'],
                'description' => $department['description'],
            ]);
        }
    }
}
