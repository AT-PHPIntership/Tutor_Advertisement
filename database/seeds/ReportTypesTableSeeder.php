<?php

use Illuminate\Database\Seeder;
use App\Models\ReportType;

class ReportTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ReportType::create([
            'name' => 'Lừa đảo'
        ]);

        ReportType::create([
            'name' => 'Trùng lặp'
        ]);

        ReportType::create([
            'name' => 'Lớp đã mở'
        ]);

        ReportType::create([
            'name' => 'Không liên lạc được'
        ]);

        ReportType::create([
            'name' => 'Thông tin không đúng thực tế'
        ]);
    }
}
