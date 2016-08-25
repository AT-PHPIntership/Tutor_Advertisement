<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    const numberOfUsers = 20;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < self::numberOfUsers-3; $i++) {
            User::create([
                'name' => $faker->name,
                'role_id' => rand(1, 3),
                'email' => $faker->email,
                'password' => bcrypt('123456'),
            ]);
        }
    }
}
