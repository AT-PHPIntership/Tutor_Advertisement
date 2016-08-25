<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Subject;
use App\Models\PostSubject;

class PostSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::all()->each(function($post) {
            $subjectNumber = rand(1, 5);
            for ($i=0; $i < $subjectNumber; $i++) {
                PostSubject::create([
                    'subject_id' => Subject::inRandomOrder()->first()->id,
                    'post_id' => $post->id
                ]);
            }
        });
    }
}
