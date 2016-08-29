<?php

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\User;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        User::all()->each(function ($u) use ($faker) {
            Profile::create([
                'user_id' => $u->id,
                'gender' => rand(0, 1),
                'url' => $faker->url,
                'bio' => $faker->text,
                'phone_number' => $faker->phoneNumber,
            ]);
        });
    }
}
