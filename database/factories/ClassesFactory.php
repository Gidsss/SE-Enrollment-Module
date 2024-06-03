<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classes>
 */
class ClassesFactory extends Factory
{

    public function definition(): array
    
    {
        return [
            'subject_code' => $this->faker->unique()->regexify('[A-Z]{3} [0-9]{4}'),
            'course_name' => $this->faker->sentence(3),
            'units' => $this->faker->numberBetween(1, 4),
            'days' => $this->faker->randomElement(['M', 'T', 'W', 'Th', 'F', 'S']),
            'time' => $this->faker->time($format = 'H:i A', $max = 'now'),
            'room' => 'COMP LAB ' . $this->faker->numberBetween(1, 4),
        ];
    }
}

