<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Reservation;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::where('type', '1')->get()->each(function($post) {
            $reservationUsers = User::inRandomOrder()->take(rand(10, 20))->get();
            $reservationUsers->each(function($user) use ($post) {
                Reservation::create([
                    'user_id' => $user->id,
                    'post_id' => $post->id
                ]);
            });
        });
    }
}
