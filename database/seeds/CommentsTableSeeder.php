<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\User;
use App\Models\Post;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        Post::all()->each(function($post) use ($faker) {
            $commentNumber = rand(5, 15);
            for ($i=0; $i < $commentNumber; $i++) {
                Comment::create([
                    'user_id' => User::inRandomOrder()->first()->id,
                    'post_id' => $post->id,
                    'content' => $faker->text,
                ]);
            }
        });
    }
}
