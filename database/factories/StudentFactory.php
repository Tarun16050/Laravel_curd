<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // return [
        //     'name' => $this->faker->name,
        //     'city' => $this->faker->city,
        // ];
        $designations = [
            'Software Engineer', 'Data Analyst', 'DevOps Engineer', 'Cybersecurity Specialist',
            'Data Scientist', 'Network Administrator', 'Cloud Architect', 'AI Engineer',
            'Database Administrator', 'Mobile App Developer', 'Frontend Developer',
            'Backend Developer', 'Full Stack Developer', 'Game Developer', 'Technical Support Specialist',
            'QA Tester', 'UI/UX Designer', 'Blockchain Developer', 'IoT Engineer',
            'Technical Lead'
        ];

        $indianCities = [
            'Mumbai', 'Delhi', 'Bangalore', 'Hyderabad', 'Ahmedabad',
            'Chennai', 'Kolkata', 'Pune', 'Jaipur', 'Lucknow',
            'Kanpur', 'Nagpur', 'Indore', 'Thane', 'Bhopal',
            'Visakhapatnam', 'Patna', 'Vadodara', 'Ghaziabad', 'Ludhiana'
        ];


        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->userName . '@gmail.com',
            'phone' => $this->faker->numerify($this->faker->randomElement(['7#########', '8#########', '9#########'])),
            'password' => '1234',
            'address' => $this->faker->address,
            'City' => $this->faker->randomElement($indianCities),
            'age' => $this->faker->numberBetween(10, 90),
            'salary' => $this->faker->numberBetween(10000, 50000),
            'designation' => $this->faker->randomElement($designations),
            'task_id' => $this->faker->numberBetween(1, 10),
            'status' => '1',
        ];
    }
}
