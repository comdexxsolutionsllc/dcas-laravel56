<?php

use App\Profile;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $defaultAccount = factory(App\User::class)->states('defaultAccount')->create();

        $DefaultAccountProfile = new Profile;

        $DefaultAccountProfile->address_1 = $faker->streetAddress;
        $DefaultAccountProfile->city = $faker->city;
        $DefaultAccountProfile->state = 'IL';
        $DefaultAccountProfile->postal_code = $faker->postcode;
        $DefaultAccountProfile->country = $faker->countryCode;
        $DefaultAccountProfile->country_code = '1';
        $DefaultAccountProfile->npa_nxx_suffix = 5551212;
        $DefaultAccountProfile->phone_type = $faker->randomElement(['alternate', 'home', 'mobile', 'work',]);

        $defaultAccount->profile()->save($DefaultAccountProfile);

        for ($i = 1; $i <= 99; $i ++) {
            $user = factory(App\User::class)->create();

            $profile = new Profile;

            $profile->address_1 = $faker->streetAddress;
            $profile->city = $faker->city;
            $profile->state = 'IL';
            $profile->postal_code = $faker->postcode;
            $profile->country = $faker->countryCode;
            $profile->country_code = '1';
            $profile->npa_nxx_suffix = 5551212;
            $profile->phone_type = $faker->randomElement(['alternate', 'home', 'mobile', 'work',]);

            $user->profile()->save($profile);
        }
    }
}
