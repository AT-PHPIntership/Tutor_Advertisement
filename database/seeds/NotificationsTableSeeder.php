<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Notification;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        User::all()->each(function($user) use ($faker) {
            $numberOfNotifications = rand(10, 20);

            for ($i=0; $i < $numberOfNotifications; $i++) {
                Notification::create([
                    'user_id' => $user->id,
                    'message' => $faker->text,
                    'unread' => rand(0, 5) ? 1 : 0
                ]);
            }
        });
    }
}
