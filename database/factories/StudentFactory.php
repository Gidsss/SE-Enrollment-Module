<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
{
    $firstName = $this->faker->firstName;
    $lastName = $this->faker->lastName;
    $middleInitial = strtoupper(substr($this->faker->firstName, 0, 1)) . '.';
    return [
        'student_id' => $this->faker->unique()->randomNumber(8),
        'student_name' => "$lastName, $firstName $middleInitial",
        'student_type' => $this->faker->randomElement(['Regular', 'Irregular']),
        'year_level' => $this->faker->numberBetween(1, 4),
    ];
}
}
