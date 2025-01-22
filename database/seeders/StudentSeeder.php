<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Method 1
        // Student::create([
        //     'name' => 'John Doe',
        //     'city' => 'Maheshwar',
        // ]);


        // Method 2
        // $data = [
        //     [
        //         'name' => 'John Doe',
        //         'city' => 'Maheshwar',
        //     ],
        //     [
        //         'name' => 'Jane Doess',
        //         'city' => 'Mumbai',
        //     ],
        //     [
        //         'name' => 'John Smith',
        //         'city' => 'Indore',
        //     ],
        // ];

        // foreach ($data as $student) {
        //     Student::create($student);
        // }


        // Method 3
        // $json = File::get('database/json/student.json');
        // $data = collect(json_decode($json));

        // $data->each(function ($student) {
        //     Student::create([
        //         'name' => $student->name,
        //         'city' => $student->city,
        //     ]);
        // });

        // Method 4
        for ($i = 1; $i <= 10; $i++) {
            Student::create([
                'name' => fake()->name,
                'city' => fake()->unique()->city,
            ]);
        }


    }
}
