<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'email' => $this->faker->unique()->safeEmail,
            'department' => $this->faker->randomElement(['Math', 'EnviSci', 'General Science', 'Tech', 'TLE', 'Mapeh']),
            'birthday' => $this->faker->datetime(),
        ];
    }
}
