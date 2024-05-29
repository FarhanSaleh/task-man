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
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'id_label' => $this->faker->numberBetween(1, 3),
            'deadline' => $this->faker->dateTimeBetween('now', '+1 year'),
            'priority' => $this->faker->numberBetween(1, 3),
            'id_user' => 1,
            'status' => 0,
            'del' => 0,
        ];
    }
}
