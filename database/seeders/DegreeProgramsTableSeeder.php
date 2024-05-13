<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DegreeProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('degree_programs')->insert([
            ['program_code' => 'CSC', 'program_name' => 'BS Computer Science', 'college' => 'CISTM'],
            ['program_code' => 'IT', 'program_name' => 'BS Information Technology', 'college' => 'CISTM'],
            ['program_code' => 'CE', 'program_name' => 'BS Computer Engineering', 'college' => 'CISTM'],
            // Add more entries as needed
        ]);
    }
}
