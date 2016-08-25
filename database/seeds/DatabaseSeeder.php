<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(ReportTypesTableSeeder::class);
        $this->call(ReportsTableSeeder::class);
        $this->call(PhotosTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(PostSubjectsTableSeeder::class);
    }
}
