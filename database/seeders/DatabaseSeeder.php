<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Student::factory(400)->create();
        \App\Models\StudyPlanValidations::factory(60)->create();
        \App\Models\ShiftingRequest::factory(90)->create();
        \App\Models\AddDropRequest::factory(70)->create();
        // \App\Models\LOARequest::factory(80)->create();

        $this->call([
            CourseSeeder::class,
            ValidationSeeder::class,
        ]);
     
    }
}
