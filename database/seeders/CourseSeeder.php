<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('courses')->insert(
            [

                [
                    'course_code' => 'CSC 0312',
                    'course_name' => 'Programming Languages (lec)',
                    'units' => 2,
                    'pre_requisites' => '3rd Year Standing',
                    
                    'year_lvl' => 3,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0312.1',
                    'course_name' => 'Programming Languages (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0312',

                    'year_lvl' => 3,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0313',
                    'course_name' => 'Software Engineering (lec)',
                    'units' => 2,
                    'pre_requisites' => '3rd Year Standing',
                    
                    'year_lvl' => 3,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0313.1',
                    'course_name' => 'Software Engineering (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0313',

                    'year_lvl' => 3,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0314',
                    'course_name' => 'Operating System (lec)',
                    'units' => 2,
                    'pre_requisites' => 'CSC 0222, CSC 0222.1',
                    'year_lvl' => 3,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0314.1',
                    'course_name' => 'Operating System (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0314',
                    'year_lvl' => 3,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0315',
                    'course_name' => 'Intelligent System (lec)',
                    'units' => 2,
                    'pre_requisites' => '3rd Year Standing',
                    
                    'year_lvl' => 3,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0315.1',
                    'course_name' => 'Intelligent System (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0315',
                    'year_lvl' => 3,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0311',
                    'course_name' => 'Automata Theory and Formal Languages',
                    'units' => 3,
                    'pre_requisites' => 'CSC 0221',
                    
                    'year_lvl' => 3,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0221',
                    'course_name' => 'Algorithm and Complexity',
                    'units' => 3,
                    'pre_requisites' => 'CSC 0212, CSC 0212.1, ICC 0104, CSC 0104.1',
                    
                    'year_lvl' => 2,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0222',
                    'course_name' => 'Architecture and Organization (lec)',
                    'units' => 2,
                    'pre_requisites' => 'CSC 0213, CSC 0213.1',
                    
                    'year_lvl' => 2,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0222.1',
                    'course_name' => 'Architecture and Organization (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0222',
                    
                    'year_lvl' => 2,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'ICC 0106',
                    'course_name' => 'Applications Development and Emerging Technologies (lec)',
                    'units' => 2,
                    'pre_requisites' => 'CSC 0212, CSC 0212.1, ICC 0105, CSC 0105.1',
                    
                    'year_lvl' => 2,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'ICC 0106.1',
                    'course_name' => 'Applications Development and Emerging Technologies (lab)',
                    'units' => 1,
                    'pre_requisites' => 'ICC 0106',
                    
                    'year_lvl' => 2,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0316',
                    'course_name' => 'Information Assurance Security',
                    'units' => 3,
                    'pre_requisites' => '',
                    
                    'year_lvl' => 2,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'GES 0013',
                    'course_name' => 'The Entrepreneurial Mind',
                    'units' => 3,
                    'pre_requisites' => '',
                    
                    'year_lvl' => 2,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'AAP 0007',
                    'course_name' => 'Environmental Science',
                    'units' => 3,
                    'pre_requisites' => '',
                    
                    'year_lvl' => 2,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'AAP 0008',
                    'course_name' => 'Art Appreciation',
                    'units' => 3,
                    'pre_requisites' => '',
                    
                    'year_lvl' => 2,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0321',
                    'course_name' => 'Software Engineering 2 (lec)',
                    'units' => 2,
                    'pre_requisites' => 'CSC 0313, CSC 0313.1',
                    
                    'year_lvl' => 3,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0321.1',
                    'course_name' => 'Software Engineering 2 (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0321',
                    'year_lvl' => 3,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0322',
                    'course_name' => 'Compiler Design (lec)',
                    'units' => 2,
                    'pre_requisites' => 'CSC 0311',
                    
                    'year_lvl' => 3,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0322.1',
                    'course_name' => 'Compiler Design (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0322',
                    'year_lvl' => 3,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0323',
                    'course_name' => 'Computational Science (lec)',
                    'units' => 2,
                    'pre_requisites' => '3rd Year Standing',
                    
                    'year_lvl' => 3,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0323.1',
                    'course_name' => 'Computational Science (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0323',

                    'year_lvl' => 3,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0324',
                    'course_name' => 'CS Elective 1 (lec)',
                    'units' => 2,
                    'pre_requisites' => '3rd Year Standing',
                    
                    'year_lvl' => 3,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0324.1',
                    'course_name' => 'CS Elective 1 (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0324',

                    'year_lvl' => 3,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0325',
                    'course_name' => 'Research Writing',
                    'units' => 3,
                    'pre_requisites' => '3rd Year Standing',
                    
                    'year_lvl' => 3,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0213',
                    'course_name' => 'Logic Design and Digital Computer Circuits (lec)',
                    'units' => 2,
                    'pre_requisites' => 'CSC 0211',
                    
                    'year_lvl' => 2,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0213.1',
                    'course_name' => 'Logic Design and Digital Computer Circuits (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0213',
                    
                    'year_lvl' => 2,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0212',
                    'course_name' => 'Object Oriented Programming (lec)',
                    'units' => 2,
                    'pre_requisites' => 'ICC 0103, ICC 0103.1,ICC 0104, ICC 0104.1',
                    
                    'year_lvl' => 2,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0212.1',
                    'course_name' => 'Object Oriented Programming (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0212',
                    
                    'year_lvl' => 2,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0224',
                    'course_name' => 'Operation Research',
                    'units' => 3,
                    'pre_requisites' => 'CSC 0211',
                    
                    'year_lvl' => 2,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'ICC 0105',
                    'course_name' => 'Information Management (lec)',
                    'units' => 2,
                    'pre_requisites' => 'ICC 0104, ICC 0104.1',
                    
                    'year_lvl' => 2,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'ICC 0105.1',
                    'course_name' => 'Information Management (lab)',
                    'units' => 1,
                    'pre_requisites' => 'ICC 0105',
                    
                    'year_lvl' => 2,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'ITE 0001',
                    'course_name' => 'Living in the IT Era',
                    'units' => 3,
                    'pre_requisites' => '',
                    
                    'year_lvl' => 2,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'ETH 0008',
                    'course_name' => 'Ethics',
                    'units' => 3,
                    'pre_requisites' => '',
                    
                    'year_lvl' => 2,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'UTS 0003',
                    'course_name' => 'Understanding the Self',
                    'units' => 3,
                    'pre_requisites' => '',
                    
                    'year_lvl' => 2,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'PATHFIT 3',
                    'course_name' => 'PE Elective (12, 13, or 14)',
                    'units' => 2,
                    'pre_requisites' => 'PATHFIT 2',
                    
                    'year_lvl' => 2,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0411',
                    'course_name' => 'CS Thesis Writing 1',
                    'units' => 3,
                    'pre_requisites' => '4th Year Standing',
                    
                    'year_lvl' => 4,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0412',
                    'course_name' => 'Networks and Communication (lec)',
                    'units' => 2,
                    'pre_requisites' => 'CSC 0314',
                    
                    'year_lvl' => 4,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0412.1',
                    'course_name' => 'Networks and Communication (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0412',
                    
                    'year_lvl' => 4,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0413',
                    'course_name' => 'CS Elective 2 (lec)',
                    'units' => 2,
                    'pre_requisites' => '4th Year Standing',
                    
                    'year_lvl' => 4,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0413.1',
                    'course_name' => 'CS Elective 2 (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0413',
                    
                    'year_lvl' => 4,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0414',
                    'course_name' => 'CS Elective 3 (lec)',
                    'units' => 2,
                    'pre_requisites' => '4th Year Standing',
                    
                    'year_lvl' => 4,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0414.1',
                    'course_name' => 'CS Elective 3 (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0414',
                    
                    'year_lvl' => 4,
                    'sem' => 1,
                ],
                [
                    'course_code' => 'CSC 0421',
                    'course_name' => 'CS Thesis Writing 2',
                    'units' => 3,
                    'pre_requisites' => 'CSC 0411',
                    
                    'year_lvl' => 4,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0422',
                    'course_name' => 'Parallel and Distributing Computing (lec)',
                    'units' => 2,
                    'pre_requisites' => 'CSC 0412',
                    
                    'year_lvl' => 4,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0422.1',
                    'course_name' => 'Parallel and Distributing Computing (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0412',
                    
                    'year_lvl' => 4,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0423',
                    'course_name' => 'Social Issues and Professional Practice',
                    'units' => 3,
                    'pre_requisites' => '4th Year Standing',
                    
                    'year_lvl' => 4,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0424',
                    'course_name' => 'Graphics and Visual Computing (lec)',
                    'units' => 2,
                    'pre_requisites' => '4th Year Standing',
                    
                    'year_lvl' => 4,
                    'sem' => 2,
                ],
                [
                    'course_code' => 'CSC 0424.1',
                    'course_name' => 'Graphics and Visual Computing (lab)',
                    'units' => 1,
                    'pre_requisites' => 'CSC 0424',
                    
                    'year_lvl' => 4,
                    'sem' => 2,
                ],
            
            
        ]);
    }
}