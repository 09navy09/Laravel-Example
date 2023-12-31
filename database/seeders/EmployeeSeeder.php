<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker =\Faker\Factory::create();
        for($i=0;$i<50;$i++)
        {
        Employee::create([
            'name'=>$faker->name,
            'address'=>$faker->sentence,
            'join_date'=>$faker->date
        ]);
    }
    }
}
