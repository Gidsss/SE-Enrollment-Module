<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Course;
use App\Models\Validation;
use App\Models\BSCS_grade;
use App\Models\StudyPlanValidations;
use App\Models\Student;
use Barryvdh\DomPDF\Facade\Pdf;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Livewire;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseData extends Component
{
    public $courses = [];
    public $bscs_grades;
    public $dropdownContent2_2 = [];
    public $dropdownContent3_1 = [];
    public $dropdownContent3_2 = [];
    public $dropdownContent4_1 = [];
    public $dropdownContent4_2 = [];
    public $tableBody = '';
    public $tableBodyId = '';
    public $totalUnits22 = 0;
    public $totalUnits32 = 0;
    public $totalUnits42 = 0;
    public $totalUnits72 = 0;
    public $totalUnits62 = 0;
    public $dropdownContentRef;
    public $preRequisiteGrade;
    public $units;
    public $studentName;
    public $yearlevel;
    public $studentid;
    public $year_level;
    public $student_id;
    public $grade;
    public $pre_requisites;

    protected $listeners = ['pushCourseCodesFinal'];
    
    public function mount()
    {
        
        $student = Auth::guard('student')->user(); 
        $this->studentName = $student->student_name;
        $this->yearlevel = $student->year_level; 
        $this->studentid = $student->student_id;

        $this->courses = Course::all();
        $this->tableBodyId = ''; 
        $this->preRequisiteGrade = $this->getPrerequisiteGrade($this->pre_requisites);
        $this->updateTotalUnits32();
        $this->updateTotalUnits42();
        $this->updateTotalUnits72();
        $this->updateTotalUnits62();
        $this->updateTotalUnits22();
        $this->updateTotalUnits21();
        
        // Assuming you have access to $course object here
        foreach ($this->courses as $course) {
            // Get the grade for the current course
            $grade = $this->getCourseGrade($course->course_code);

            // Get the prerequisite grade for the current course
            $preRequisiteGrade = $this->getPrerequisiteGrade($course->pre_requisites);
    
            if (($grade === 5 && $course->year_lvl === 2 && $course->sem === 2) || ($preRequisiteGrade === 5 && $course->year_lvl === 2 && $course->sem === 2)) {
                $targetTable = 'tableBody42';
                $this->moveRowToDropdown($course->id, $targetTable);
            } elseif ($preRequisiteGrade === 5 && $course->year_lvl === 3 && $course->sem === 1) {
                $targetTable = 'tableBody72';
                $this->moveRowToDropdown($course->id, $targetTable);
            } elseif (($grade === 5 && $course->year_lvl === 3 && $course->sem === 2) || ($preRequisiteGrade === 5 && $course->year_lvl === 3 && $course->sem === 2)) {
                $targetTable = 'tableBody62';
                $this->moveRowToDropdown($course->id, $targetTable);
            }
        }
    }
    

    public function moveRowToDropdown($courseId, $tableBody)
    {
        $course = $this->courses->firstWhere('id', $courseId);

        if ($tableBody === 'tableBody32') {
            $this->dropdownContent3_1[] = $course;
            $this->courses = $this->courses->reject(function ($c) use ($courseId) {
                return $c->id === $courseId;
            });
        } elseif ($tableBody === 'tableBody42') {
            $this->dropdownContent3_2[] = $course;
            $this->courses = $this->courses->reject(function ($c) use ($courseId) {
                return $c->id === $courseId;
            });
        } elseif ($tableBody === 'tableBody72') {
            $this->dropdownContent4_1[] = $course;
            $this->courses = $this->courses->reject(function ($c) use ($courseId) {
                return $c->id === $courseId;
            });
        } elseif ($tableBody === 'tableBody62') {
            $this->dropdownContent4_2[] = $course;
            $this->courses = $this->courses->reject(function ($c) use ($courseId) {
                return $c->id === $courseId;
            });
        } elseif ($tableBody === 'tableBody22') {
            $this->dropdownContent2_2[] = $course;
            $this->courses = $this->courses->reject(function ($c) use ($courseId) {
                return $c->id === $courseId;
            });
        } elseif ($tableBody === 'tableBody') {
            $this->dropdownContent2_1[] = $course;
            $this->courses = $this->courses->reject(function ($c) use ($courseId) {
                return $c->id === $courseId;
            });
        }

        $this->updateTotalUnits32();
        $this->updateTotalUnits42();
        $this->updateTotalUnits72();
        $this->updateTotalUnits62();
        $this->updateTotalUnits22();
        $this->updateTotalUnits21();
    }

    public function moveRowFromDropdownToTable($courseCode, $tableBodyId){
        $courseIndex = null;
        $dropdownContentRef = null;
    
        switch ($tableBodyId) {
            case 'tableBody22':
                $dropdownContentRef = &$this->dropdownContent2_2;
                break;
            case 'tableBody32':
                $dropdownContentRef = &$this->dropdownContent3_1;
                break;
            case 'tableBody42':
                $dropdownContentRef = &$this->dropdownContent3_2;
                break;
            case 'tableBody72':
                $dropdownContentRef = &$this->dropdownContent4_1;
                break;
            case 'tableBody62':
                $dropdownContentRef = &$this->dropdownContent4_2;
                break;
        }
    
        // Proceed only if $dropdownContentRef is defined
        if (isset($dropdownContentRef)) {
            foreach ($dropdownContentRef as $index => $course) {
                if ($course->course_code === $courseCode) { // Use -> instead of []
                    $courseIndex = $index;
                    break;
                }
            }
    
            if ($courseIndex !== null) {
                $course = $dropdownContentRef[$courseIndex];
                $this->courses->push($course);
                unset($dropdownContentRef[$courseIndex]);
                $dropdownContentRef = array_values($dropdownContentRef); // Reset array keys
                // Add the course to the table with the appropriate button
                $this->updateTotalUnits($tableBodyId, $course->units); // Pass tableBodyId for proper update
            } else {
                // Handle course not found in dropdown (optional: error message)
            }
        }
    }

    public function updateTotalUnits($tableBodyId, $unitChange)
    {
        // Determine the total units property based on the table body ID
        switch ($tableBodyId) {
            case 'tableBody22':
                $totalUnitsProperty = 'totalUnits22';
                break;
            case 'tableBody32':
                $totalUnitsProperty = 'totalUnits32';
                break;
            case 'tableBody42':
                $totalUnitsProperty = 'totalUnits42';
                break;
            case 'tableBody72':
                $totalUnitsProperty = 'totalUnits72';
                break;
            case 'tableBody62':
                $totalUnitsProperty = 'totalUnits62';
                break;
            default:
                return; // Return if the table body ID is not recognized
        }
    
        // Check if the total units property exists in the class
        if (property_exists($this, $totalUnitsProperty)) {
            // If the unit change is positive, add it to the total units
            if ($unitChange > 0) {
                $this->$totalUnitsProperty += $unitChange;
            }
            // If the unit change is negative, subtract it from the total units
            elseif ($unitChange < 0 && $this->$totalUnitsProperty >= abs($unitChange)) {
                $this->$totalUnitsProperty += $unitChange;
            }
        }
    }

    public function getDisplayedCourseCodes()
    {
        $courseCodes = [];
        foreach ($this->courses as $course) {
            // Retrieve the grade for the current course from the BSCS_grade model
            $grade = BSCS_grade::where('course_code', $course->course_code)
            ->where('student_id', $this->studentid)
            ->value('grades');

            
            // Retrieve the prerequisite grade from the BSCS_grade model if prerequisites exist
            $prerequisiteGrade = $course->pre_requisites 
            ? BSCS_grade::where('course_code', $course->pre_requisites)
                         ->where('student_id', $this->studentid)
                         ->value('grades')
            : null;
    
            // Include courses based on year level when grades are not 5
            if ($this->yearlevel === 2 && $course->year_lvl >= 2 && $prerequisiteGrade !== 5 && $grade !== 5 || $grade !== 5) {
                $courseCodes[] = $course->course_code;
            } elseif ($this->yearlevel === 3 && $course->year_lvl >= 3 && $prerequisiteGrade !== 5 && $grade !== 5) {
                $courseCodes[] = $course->course_code;
            } elseif ($this->yearlevel === 4 && $course->year_lvl >= 4 && $prerequisiteGrade !== 5 && $grade !== 5) {
                $courseCodes[] = $course->course_code;
            } elseif ($course->year_lvl === $this->yearlevel && $prerequisiteGrade !== 5 && $grade !== 5) {
                $courseCodes[] = $course->course_code;
            }
        }
        return $courseCodes;
    }

    public function getPrerequisiteGrade($preRequisiteCourseCode)
    {
        // Assuming $pre_requisite contains the course code of the prerequisite course
        $preRequisite = BSCS_grade::where('course_code', $preRequisiteCourseCode)
                           ->where('student_id', $this->studentid)
                           ->first();

        // If the prerequisite course exists and has a grade, return the grade
        if ($preRequisite && isset($preRequisite->grades)) {
            return $preRequisite->grades;
        }
    }

    public function getCourseGrade($courseCode)
    {
        // Assuming there is a model named CourseGrade to represent the grades of each course
        $courseGrade = BSCS_grade::where('course_code', $courseCode)
                                ->where('student_id', $this->studentid)
                                ->first();

        // If the course grade exists and has a grade, return the grade
        if ($courseGrade && isset($courseGrade->grades)) {
            return $courseGrade->grades;
        }

        // Return null if the course grade does not exist or does not have a grade
        return null;
    }
    
    public function pushCourseCodes(){
        $courseCodes = $this->getDisplayedCourseCodes();
        
        // Get the validation record for the current student
        $validation = Validation::where('student_id', $this->studentid)->first();
    
        if (!$validation) {
            $validation = new Validation();
            $validation->student_id = $this->studentid;
            $validation->yearlvl = $this->yearlevel; 
            $validation->status = 'Pending';
            $validation->daterequest = Carbon::now(); //di to nagana not sure y
        }
    
        $studyPlanCourseCodes = json_encode($courseCodes);
        
        $validation->study_plan_course_code = $studyPlanCourseCodes;
    
        $validation->save();
    
        session()->flash('courseCodesNotification', 'Course codes pushed successfully.');
    }

    public function pushCourseCodesFinal(){
        // Get the validation record for the current student
        $validation = Validation::where('student_id', $this->studentid)->first();
    
        if ($validation) {
            // Create or update the corresponding record in the study_plan_validations table
            $study_plan_validation = StudyPlanValidations::firstOrNew(['student_id' => $this->studentid]);
    
            // Assign the attributes from the validation object to the study_plan_validation object
            $study_plan_validation->student_id = $validation->student_id; 
            $study_plan_validation->year_level = $validation->yearlvl; 
            $study_plan_validation->status = $validation->status;
            $study_plan_validation->date_of_request = $validation->daterequest;
            $study_plan_validation->study_plan = $validation->study_plan_course_code;
    
            // Save the study_plan_validation object
            $study_plan_validation->save();

            $validation->delete();
        }
    }

    public function render(){  
        $courses = Course::all();
        $validations = Validation::all();
        $bscs_grades = BSCS_grade::all();
        $study_plan_validations = StudyPlanValidations::all();
        $student = Student::all();

        $displayedCourseCodes = $this->getDisplayedCourseCodes();

        // Initialize variables to track whether each year level is present in the validations
        $hasYear2 = false;
        $hasYear3 = false;
        $hasYear4 = false;

        foreach ($student as $student) {
            if ($student->studentid === $this->student_id) {
                if ($this->yearlevel === 2 && !$hasYear2) {
                    $hasYear2 = true;
                    $hasYear3 = true;
                    $hasYear4 = true;
                } elseif ($this->yearlevel === 3 && !$hasYear3) {
                    $hasYear3 = true;
                    $hasYear4 = true;
                } elseif ($this->yearlevel === 4 && !$hasYear4) {
                    $hasYear4 = true;
                }
            }
        }

        return view('livewire.course-data', [
            'courses' => $courses,
            'student' => $student,
            'validations' => $validations,
            'bscs_grades' => $bscs_grades,
            'hasYear2' => $hasYear2,
            'hasYear3' => $hasYear3,
            'hasYear4' => $hasYear4,
            'dropdownContent3_2' => $this->dropdownContent3_2,
            'dropdownContent3_1' => $this->dropdownContent3_1,
            'dropdownContent4_1' => $this->dropdownContent4_1,
            'dropdownContent4_2' => $this->dropdownContent4_2,
            'tableBodyId' => $this->tableBodyId,
            'totalUnits32' => $this->totalUnits32, 
            'totalUnits42' => $this->totalUnits42, 
            'totalUnits72' => $this->totalUnits72, 
            'totalUnits62' => $this->totalUnits62, 
            'totalUnits22' => $this->totalUnits22, 
            'displayedCourseCodes' => $displayedCourseCodes,
        ]);
    }

    private function checkGrades($course, $gradeThreshold){
        // Assuming $course has properties 'course_code' and 'course_name'
        return isset($course->grades) && $course->grades === $gradeThreshold 
            ? $course->course_code . ' - ' . $course->course_name 
            : '';
    }
    private function updateTotalUnits21()
    {
        $this->totalUnits21 = $this->courses->where('year_lvl', 2)->where('sem', 1)->sum('units');
    }
    
    private function updateTotalUnits22()
    {
        $this->totalUnits22 = $this->courses->where('year_lvl', 2)->where('sem', 2)->sum('units');
    }

    private function updateTotalUnits32()
    {
        $this->totalUnits32 = $this->courses->where('year_lvl', 3)->where('sem', 1)->sum('units');
    }

    private function updateTotalUnits42()
    {
        $this->totalUnits42 = $this->courses->where('year_lvl', 3)->where('sem', 2)->sum('units');
    }
    private function updateTotalUnits72()
    {
        $this->totalUnits72 = $this->courses->where('year_lvl', 4)->where('sem', 1)->sum('units');
    }

    private function updateTotalUnits62()
    {
        $this->totalUnits62 = $this->courses->where('year_lvl', 4)->where('sem', 2)->sum('units');
    }
}