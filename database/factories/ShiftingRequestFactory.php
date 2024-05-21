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
        return [
            'student_id' => \App\Models\Student::factory()->create()->student_id, // Ensure this matches an existing student ID
            'new_degree_program' => $this->faker->randomElement(['BS Computer Science', 'BA English', 'BS Mathematics']),
            'study_plan' => $this->faker->optional()->text,
            'letter_of_intent' => $this->faker->optional()->text,
            'note_of_undertaking' => $this->faker->optional()->text,
            'shifting_form' => $this->faker->optional()->text,
            'status' => $this->faker->optional()->randomElement(['Pending', 'Approved', 'Revise', 'Unhandled']),
            'date_of_request' => $this->faker->optional()->date,
            'is_finalized' => $this->faker->boolean,
        ];
    }
}
