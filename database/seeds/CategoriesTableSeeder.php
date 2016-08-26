<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    const numberOfCategories = 10;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < self::numberOfCategories; $i++) {
            Category::create([
                'name' => $faker->words(rand(2, 3), true),
            ]);
        }
    }
}
