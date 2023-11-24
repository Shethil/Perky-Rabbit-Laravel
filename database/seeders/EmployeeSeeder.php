<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'name' => 'Shethil Ahammed',
            'email' => 'shithelahammed@gmail.com',
            'phone' => '01955199791',
            'address' => 'DIT PROJECT, MERUL BADDA, DHAKA 1212',
            'department_id' => 1,
        ]);
    }
}
