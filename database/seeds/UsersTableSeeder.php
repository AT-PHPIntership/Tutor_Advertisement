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
        $admin = new User();
        $admin->name = "Admin";
        $admin->role_id = 1;
        $admin->email = "admin@tutor.app";
        $admin->password = bcrypt('123456');
        $admin->save();

        $mod = new User();
        $mod->name = "Mod";
        $mod->role_id = 1;
        $mod->email = "mod@tutor.app";
        $mod->password = bcrypt('123456');
        $mod->save();

        $member = new User();
        $member->name = "Admin";
        $member->role_id = 1;
        $member->email = "member@tutor.app";
        $member->password = bcrypt('123456');
        $member->save();
        
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
