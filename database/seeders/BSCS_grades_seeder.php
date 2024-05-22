<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BSCS_grades_seeder extends Seeder
{

    public function run(): void
    {
        \DB::table('bscs_grades')->insert
        (
            array_map(function($course) {
                $course['student_id'] = '202176241894';
                return $course;
            }, [
                [
                    'course_code' => 'CSC 0213',
                    'course_name' => 'Logic Design and Digital Computer Circuits (lec)',
                    'units' => 2,
                    'grades' => 1.75,
                    'year_lvl' => 2,
                    'sem' => 1,
                    'pre_requisites' => 'CSC 0211',
                ],
                [
                    'course_code' => 'CSC 0213.1',
                    'course_name' => 'Logic Design and Digital Computer Circuits (lab)',
                    'units' => 1,
                    'grades' => 1.75,
                    'year_lvl' => 2,
                    'sem' => 1,
                    'pre_requisites' => 'CSC 0213',
                ],
                [
                    'course_code' => 'CSC 0212',
                    'course_name' => 'Object Oriented Programming (lec)',
                    'units' => 2,
                    'grades' => 2.50,
                    'year_lvl' => 2,
                    'sem' => 1,
                    'pre_requisites' => 'ICC 0103, ICC 0103.1, ICC 0104, ICC 0104.1',
                ],
                [
                    'course_code' => 'CSC 0212.1',
                    'course_name' => 'Object Oriented Programming (lab)',
                    'units' => 1,
                    'grades' => 1.25,
                    'year_lvl' => 2,
                    'sem' => 1,
                    'pre_requisites' => 'CSC 0212',
                ],
                [
                    'course_code' => 'CSC 0224',
                    'course_name' => 'Operation Research',
                    'units' => 3,
                    'grades' => 1.00,
                    'year_lvl' => 2,
                    'sem' => 1,
                    'pre_requisites' => 'CSC 0211',
                ],
                [
                    'course_code' => 'ICC 0105',
                    'course_name' => 'Information Management (lec)',
                    'units' => 2,
                    'grades' => 1.50,
                    'year_lvl' => 2,
                    'sem' => 1,
                    'pre_requisites' => 'ICC 0104, ICC 0104.1',
                ],
                [
                    'course_code' => 'ICC 0105.1',
                    'course_name' => 'Information Management (lab)',
                    'units' => 1,
                    'grades' => 1.25,
                    'year_lvl' => 2,
                    'sem' => 1,
                    'pre_requisites' => 'ICC 0105',
                ],
                [
                    'course_code' => 'ITE 0001',
                    'course_name' => 'Living in the IT Era',
                    'units' => 3,
                    'grades' => 1.75,
                    'year_lvl' => 2,
                    'sem' => 1,
                    'pre_requisites' => '',
                ],
                [
                    'course_code' => 'ETH 0008',
                    'course_name' => 'Ethics',
                    'units' => 3,
                    'grades' => 2.00,
                    'year_lvl' => 2,
                    'sem' => 1,
                    'pre_requisites' => '',
                ],
                [
                    'course_code' => 'UTS 0003',
                    'course_name' => 'Understanding the Self',
                    'units' => 3,
                    'grades' => 1.75,
                    'year_lvl' => 2,
                    'sem' => 1,
                    'pre_requisites' => '',
                ],
                [
                    'course_code' => 'PATHFIT 3',
                    'course_name' => 'PE Elective (12, 13, or 14)',
                    'units' => 2,
                    'grades' => 1.00,
                    'year_lvl' => 2,
                    'sem' => 1,
                    'pre_requisites' => 'PATHFIT 2',
                ],
            [
                'course_code' => 'CSC 0221',
                'course_name' => 'Algorithm and Complexity',
                'units' => 3,
                'pre_requisites' => 'CSC 0212, CSC 0212.1, ICC 0104, CSC 0104.1',
                'grades' => 5,
                'year_lvl' => 2,
                'sem' => 2,
            ],
            [
                'course_code' => 'CSC 0222',
                'course_name' => 'Architecture and Organization (lec)',
                'units' => 2,
                'pre_requisites' => 'CSC 0213, CSC 0213.1',
                'grades' => 2,
                'year_lvl' => 2,
                'sem' => 2,
            ],
            [
                'course_code' => 'CSC 0222.1',
                'course_name' => 'Architecture and Organization (lab)',
                'units' => 1,
                'pre_requisites' => 'CSC 0222',
                'grades' => 2,
                'year_lvl' => 2,
                'sem' => 2,
            ],
            [
                'course_code' => 'ICC 0106',
                'course_name' => 'Applications Development and Emerging Technologies (lec)',
                'units' => 2,
                'pre_requisites' => 'CSC 0212, CSC 0212.1, ICC 0105, CSC 0105.1',
                'grades' => 2,
                'year_lvl' => 2,
                'sem' => 2,
            ],
            [
                'course_code' => 'ICC 0106.1',
                'course_name' => 'Applications Development and Emerging Technologies (lab)',
                'units' => 1,
                'pre_requisites' => 'ICC 0106',
                'grades' => 2,
                'year_lvl' => 2,
                'sem' => 2,
            ],
            [
                'course_code' => 'CSC 0316',
                'course_name' => 'Information Assurance Security',
                'units' => 3,
                'pre_requisites' => '',
                'grades' => 5,
                'year_lvl' => 2,
                'sem' => 2,
            ],
            [
                'course_code' => 'GES 0013',
                'course_name' => 'The Entrepreneurial Mind',
                'units' => 3,
                'pre_requisites' => '',
                'grades' => 1,
                'year_lvl' => 2,
                'sem' => 2,
            ],
            [
                'course_code' => 'AAP 0007',
                'course_name' => 'Environmental Science',
                'units' => 3,
                'pre_requisites' => '',
                'grades' => 1,
                'year_lvl' => 2,
                'sem' => 2,
            ],
            [
                'course_code' => 'AAP 0008',
                'course_name' => 'Art Appreciation',
                'units' => 3,
                'pre_requisites' => '',
                'grades' => 1,
                'year_lvl' => 2,
                'sem' => 2,
            ],
            [
                'course_code' => 'ICC 0101',
                'course_name' => 'Introduction to Computing (lec)',
                'units' => 2,
                'grades' => 2.25,
                'year_lvl' => 1,
                'sem' => 1,
                'pre_requisites' => null,
            ],
            [
                'course_code' => 'ICC 0101.1',
                'course_name' => 'Introduction to Computing (lab)',
                'units' => 1,
                'grades' => 2.00,
                'year_lvl' => 1,
                'sem' => 1,
                'pre_requisites' => null,
            ],
            [
                'course_code' => 'ICC 0102',
                'course_name' => 'Fundamentals of Programming (lec)',
                'units' => 2,
                'grades' => 2.00,
                'year_lvl' => 1,
                'sem' => 1,
                'pre_requisites' => null,
            ],
            [
                'course_code' => 'ICC 0102.1',
                'course_name' => 'Fundamentals of Programming (lab)',
                'units' => 1,
                'grades' => 1.25,
                'year_lvl' => 1,
                'sem' => 1,
                'pre_requisites' => null,
            ],
            [
                'course_code' => 'CSC 0102',
                'course_name' => 'Discrete Structure 1',
                'units' => 3,
                'grades' => 3.00,
                'year_lvl' => 1,
                'sem' => 1,
                'pre_requisites' => null,
            ],
            [
                'course_code' => 'STS 0002',
                'course_name' => 'Science, Technology and Society',
                'units' => 3,
                'grades' => 1.25,
                'year_lvl' => 1,
                'sem' => 1,
                'pre_requisites' => null,
            ],
            [
                'course_code' => 'MMW 0001',
                'course_name' => 'Mathematics in the Modern World',
                'units' => 3,
                'grades' => 2.00,
                'year_lvl' => 1,
                'sem' => 1,
                'pre_requisites' => null,
            ],
            [
                'course_code' => 'PCM 0006',
                'course_name' => 'Purposive Communications',
                'units' => 3,
                'grades' => 1.00,
                'year_lvl' => 1,
                'sem' => 1,
                'pre_requisites' => null,
            ],
            [
                'course_code' => 'FIL 0010',
                'course_name' => 'Interdisiplinaryong Pagbasa at Pagsulat sa mga Diskurso ng Pagpapahayag',
                'units' => 3,
                'grades' => 1.25,
                'year_lvl' => 1,
                'sem' => 1,
                'pre_requisites' => null,
            ],
            [
                'course_code' => 'PATHFIT 1',
                'course_name' => 'Foundation of Physical Activities',
                'units' => 2,
                'grades' => 1.00,
                'year_lvl' => 1,
                'sem' => 1,
                'pre_requisites' => null,
            ],
            [
                'course_code' => 'NSTP 1',
                'course_name' => 'National Service Training Program -ROTC 1/ CTWS 1',
                'units' => 3,
                'grades' => 1.75,
                'year_lvl' => 1,
                'sem' => 1,
                'pre_requisites' => null,
            ],
            [
                'course_code' => 'ICC 0103',
                'course_name' => 'Intermediate Programming (lec)',
                'units' => 2,
                'grades' => 2.75,
                'year_lvl' => 1,
                'sem' => 2,
                'pre_requisites' => 'ICC 0102, ICC 0102.1',
            ],
            [
                'course_code' => 'ICC 0103.1',
                'course_name' => 'Intermediate Programming (lab)',
                'units' => 1,
                'grades' => 2.50,
                'year_lvl' => 1,
                'sem' => 2,
                'pre_requisites' => '(ICC 0103)',
            ],
            [
                'course_code' => 'ICC 0104',
                'course_name' => 'Data Structures and Algorithms (lec)',
                'units' => 2,
                'grades' => 1.00,
                'year_lvl' => 1,
                'sem' => 2,
                'pre_requisites' => 'ICC 0102, ICC 0102.1',
            ],
            [
                'course_code' => 'ICC 0104.1',
                'course_name' => 'Data Structures and Algorithms (lab)',
                'units' => 1,
                'grades' => 1.75,
                'year_lvl' => 1,
                'sem' => 2,
                'pre_requisites' => '(ICC 0104)',
            ],
            [
                'course_code' => 'CSC 0211',
                'course_name' => 'Discrete Structures 2',
                'units' => 3,
                'grades' => 1.75,
                'year_lvl' => 1,
                'sem' => 2,
                'pre_requisites' => 'CSC 0102',
            ],
            [
                'course_code' => 'CSC 0223',
                'course_name' => 'Human Computer Interaction',
                'units' => 3,
                'grades' => 1.25,
                'year_lvl' => 1,
                'sem' => 2,
                'pre_requisites' => '',
            ],
            [
                'course_code' => 'TCW 0005',
                'course_name' => 'The Contemporary World',
                'units' => 3,
                'grades' => 1.25,
                'year_lvl' => 1,
                'sem' => 2,
                'pre_requisites' => '',
            ],
            [
                'course_code' => 'RPH 0004',
                'course_name' => 'Readings in Philippine History',
                'units' => 3,
                'grades' => 2.00,
                'year_lvl' => 1,
                'sem' => 2,
                'pre_requisites' => '',
            ],
            [
                'course_code' => 'LWR 0009',
                'course_name' => 'Life and Works of Rizal',
                'units' => 3,
                'grades' => 2.00,
                'year_lvl' => 1,
                'sem' => 2,
                'pre_requisites' => '',
            ],
            [
                'course_code' => 'PATHFIT2',
                'course_name' => 'PE Elective (12, 13, or 14)',
                'units' => 2,
                'grades' => 1.00,
                'year_lvl' => 1,
                'sem' => 2,
                'pre_requisites' => 'PATHFIT 1',
            ],
            [
                'course_code' => 'NSTP 2',
                'course_name' => 'National Service Training Program -ROTC 2/ CTWS 2',
                'units' => 3,
                'grades' => 1.75,
                'year_lvl' => 1,
                'sem' => 2,
                'pre_requisites' => 'NSTP 1',
            ],
            ])
        );
    }
}
