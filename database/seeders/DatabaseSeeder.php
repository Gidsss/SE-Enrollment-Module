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
        // \App\Models\Classes::factory(100)->create();
        // \App\Models\StudyPlanValidations::factory(60)->create(); // To use this, you may need to edit the factory file to accomodate some of column changes
        // \App\Models\ShiftingRequest::factory(10)->create();
        // \App\Models\AddDropRequest::factory(10)->create();
        // \App\Models\LOARequest::factory(10)->create();

        $this->call([
            CourseSeeder::class,
            ClassesTableSeeder::class,
            // ValidationSeeder::class,  // To use this, you may need to edit the seeder file to accomodate some of column changes
            DegreeProgramsTableSeeder::class,
        ]);
     
    }
}
