<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\City;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        User::all()->each(function($u) use ($faker) {
            $postAmount = rand(5, 10);
            for ($i=0; $i < $postAmount; $i++) {
                Post::create([
                    'user_id' => $u->id,
                    'type' => rand(0, 1),
                    'title' => $faker->words(rand(5, 10), true),
                    'content' => $faker->text,
                    'status' => rand(0, 1),
                    'reviewer_id' => User::inRandomOrder()->first()->id,
                    'category_id' => Category::inRandomOrder()->first()->id,
                    'city_id' => City::inRandomOrder()->first()->id,
                    'lat' => $faker->randomFloat(6, -85, 85),
                    'lng' => $faker->randomFloat(6, -180, 180),
                    'closed' => rand(0, 10) ? 0 : 1,
                ]);
            }
        });
    }
}
