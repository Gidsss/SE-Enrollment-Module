<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ValidationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('validations')->insert
        ([
            [
                'id' => 16,
                'studentid' => '2021-01299',
                'student_name' => 'Villaviza, Joseph Miguel',
                'yearlvl' => 2,
                'daterequest' => '2023-01-15',
                'status' => 'Approved',
                'validation_pdfs' => null,
                'studentprograms' => 'BS Computer Science',
                'study_plan_course_code' => "['CSC 0213', 'CSC 0224', 'ICC 0105', 'ICC 0105.1', 'ITE 0001', 'ETH 0008', 'UTS 0003', 'PATHFIT 3', 'CSC 0222', 'CSC 0222.1', 'ICC 0106', 'ICC 0106.1', 'GES 0013', 'AAP 0007', 'AAP 0008', 'CSC 0312', 'CSC 0312.1', 'CSC 0313', 'CSC 0313.1', 'CSC 0314', 'CSC 0314.1', 'CSC 0321', 'CSC 0321.1', 'CSC 0322', 'CSC 0322.1', 'CSC 0323', 'CSC 0323.1', 'CSC 0324', 'CSC 0324.1', 'CSC 0325', 'CSC 0411', 'CSC 0412', 'CSC 0412.1', 'CSC 0413', 'CSC 0413.1', 'CSC 0414', 'CSC 0414.1', 'CSC 0421', 'CSC 0422', 'CSC 0422.1', 'CSC 0423', 'CSC 0424']",
            ],
            [
                'id' => 17,
                'studentid' => '2021-12983',
                'student_name' => 'Balena, Mark',
                'yearlvl' => 3,
                'daterequest' => '2023-02-20',
                'status' => 'Pending',
                'validation_pdfs' => null,
                'studentprograms' => 'BS Biology',
                'study_plan_course_code' => null,
            ],
            [
                'id' => 18,
                'studentid' => '2022-21983',
                'student_name' => 'Halili, Ace Byrone',
                'yearlvl' => 3,
                'daterequest' => '2023-03-25',
                'status' => 'Rejected',
                'validation_pdfs' => null,
                'studentprograms' => 'BS Computer Science',
                'study_plan_course_code' => null,
            ],
            [
                'id' => 19,
                'studentid' => '2021-98213',
                'student_name' => 'Robantes, John Lou',
                'yearlvl' => 2,
                'daterequest' => '2023-04-30',
                'status' => 'Approved',
                'validation_pdfs' => null,
                'studentprograms' => 'BS Computer Science',
                'study_plan_course_code' => null,
            ],
            [
                'id' => 20,
                'studentid' => '2020-31982',
                'student_name' => 'Salangsang, Gideon',
                'yearlvl' => 3,
                'daterequest' => '2023-05-05',
                'status' => 'Pending',
                'validation_pdfs' => null,
                'studentprograms' => 'BS Biology',
                'study_plan_course_code' => null,
            ],
        ]);
    }
}
