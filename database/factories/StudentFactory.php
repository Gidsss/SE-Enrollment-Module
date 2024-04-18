<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected static ?string $password;
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
        'student_id' => '2021' . $this->faker->randomNumber(5),
        'student_name' => "$lastName, $firstName $middleInitial",
        'student_type' => $this->faker->randomElement(['Regular', 'Irregular']),
        'year_level' => $this->faker->numberBetween(1, 4),
        'password' => static::$password ??= Hash::make('password'),
        'status' => $this->faker->randomElement(['Pending', 'Approved', 'Revise']),
    ];
}
}
