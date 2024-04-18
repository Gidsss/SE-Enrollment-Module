<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShiftingRequest>
 */
class ShiftingRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstName = $this->faker->firstName;
        $lastName = $this->faker->lastName;
        $middleInitial = strtoupper(substr($this->faker->firstName, 0, 1)) . '.';
        return [
            'student_id' => '2021' . $this->faker->randomNumber(5),
            'student_name' => "$lastName, $firstName $middleInitial",
            'year_level' => $this->faker->numberBetween(1, 4),
            'date_of_request' => $this->faker->date,
            'status' => $this->faker->randomElement(['Pending', 'Approved', 'Revise', 'Unhandled']),
           // 'current_checklist' => $this->faker->text,
        ];
    }
}
