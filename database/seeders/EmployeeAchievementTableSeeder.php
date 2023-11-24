<?php

namespace Database\Seeders;

use App\Models\Achievement;
use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeAchievementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employee = Employee::find(1);
        $achievement = Achievement::find(1);
        $employee->achievements()->attach($achievement, ['achievement_date' => now()]);
    }
}
