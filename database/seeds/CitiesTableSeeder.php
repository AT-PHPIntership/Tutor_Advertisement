<?php

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesTableSeeder extends Seeder
{
    const numberOfCities = 30;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < self::numberOfCities; $i++) {
            City::create([
                'name' => $faker->city,
            ]);
        }
    }
}
