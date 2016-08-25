<?php

use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectsTableSeeder extends Seeder
{
    const numberOfSubjects = 20;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < self::numberOfSubjects; $i++) {
            Subject::create([
                'name' => $faker->words(rand(1, 2), true),
            ]);
        }
    }
}
