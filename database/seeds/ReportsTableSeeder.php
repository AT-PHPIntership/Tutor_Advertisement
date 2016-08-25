<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Report;
use App\Models\ReportType;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $reportsNumber = 20;

        for ($i=0; $i < $reportsNumber; $i++) {
            Report::create([
                'user_id' => User::inRandomOrder()->first()->id,
                'post_id' => Post::inRandomOrder()->first()->id,
                'report_type_id' => ReportType::inRandomOrder()->first()->id,
                'description' => $faker->text,
                'status' => rand(0, 1),
            ]);
        }
    }
}
