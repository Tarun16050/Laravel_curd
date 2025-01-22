<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departments = [
            'PHP', 'JAVA', 'Python', 'DevOps', 'Cybersecurity',
            'Data Science', 'Networking', 'Cloud Computing', 'AI & ML', 'Database Management',
            'Mobile Development', 'Frontend Development', 'Backend Development', 'Full Stack',
            'Game Development', 'Technical Support', 'QA Testing', 'UI/UX Design',
            'Blockchain', 'IoT'
        ];
        return [

            'department' => $this->faker->randomElement($departments),
            'task' => $this->faker->sentence(3),
            'description' => $this->faker->text,
            'status' => '1',
            // 'description' => $this->faker->paragraph,
            // 'department' => $this->faker->name,
            // 'task' => $this->faker->name,
            // 'status' => '1',
        ];
    }
}
