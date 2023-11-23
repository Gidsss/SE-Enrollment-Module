<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_id' => $this->faker->unique()->randomNumber(8),
            'student_name' => $this->faker->name,
            'year_level' => $this->faker->numberBetween(1, 12),
            'date_request' => $this->faker->date,
            'status' => $this->faker->randomElement(['Pending', 'Approved', 'Rejected']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
