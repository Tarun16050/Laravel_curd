<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use App\Models\Task;
use App\Models\Student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // $this->call([
        //     StudentSeeder::class,
        // ]);

        Employee::factory(10)->create();
        Student::factory(10)->create();
        Task::factory(10)->create();

    }
}
