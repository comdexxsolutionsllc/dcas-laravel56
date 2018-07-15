<?php

use App\Profile;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @param \Faker\Generator $faker
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $defaultAccount = factory(App\User::class)->states('defaultAccount')->create();

        $dftAcctProfile = new Profile;

        $dftAcctProfile->address_1 = $faker->streetAddress;
        $dftAcctProfile->city = $faker->city;
        $dftAcctProfile->state = 'IL';
        $dftAcctProfile->postal_code = $faker->postcode;
        $dftAcctProfile->country = $faker->countryCode;
        $dftAcctProfile->country_code = '1';
        $dftAcctProfile->npa_nxx_suffix = 5551212;
        $dftAcctProfile->phone_type = $faker->randomElement(['alternate', 'home', 'mobile', 'work',]);

        $defaultAccount->profile()->save($dftAcctProfile);

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
