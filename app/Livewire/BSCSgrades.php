<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\BSCS_grade;

class BSCSgrades extends Component
{
    public $bscs_grades;
    public $tableBody = '';
    public $tableBodyId = '';
    public $totalUnits22 = 0;
    public $totalGrades22 = 0;
    public $countGrades22 = 0;
    public $totalUnits21 = 0;
    public $totalGrades21 = 0;
    public $countGrades21 = 0;
    public $totalUnits11 = 0;
    public $totalGrades11 = 0;
    public $countGrades11 = 0;
    public $totalUnits12 = 0;
    public $totalGrades12 = 0;
    public $countGrades12 = 0;
    public $studentId;

    public function mount($studentId)
    {
        $this->studentId = $studentId;
        $this->bscs_grades = BSCS_grade::where('student_id', $this->studentId)->get();
        $this->updateAllValues();
    }
    
    public function render()
    {
        $bscs_grades = BSCS_grade::where('student_id', $this->studentId)->get();
        return view('livewire.b-s-c-sgrades', [
            'bscs_grades' => $bscs_grades,
        ]);
    }

    private function updateAllValues()
    {
        $this->updateValues(2, 2, '22');
        $this->updateValues(2, 1, '21');
        $this->updateValues(1, 1, '11');
        $this->updateValues(1, 2, '12');
    }

    private function updateValues($year_lvl, $sem, $suffix)
    {
        $totalUnitsVar = 'totalUnits' . $suffix;
        $totalGradesVar = 'totalGrades' . $suffix;
        $countGradesVar = 'countGrades' . $suffix;

        $units = $this->bscs_grades->where('year_lvl', $year_lvl)->where('sem', $sem)->sum('units');
        $sumGrades = $this->bscs_grades->where('year_lvl', $year_lvl)->where('sem', $sem)->sum('grades');
        $countGrades = $this->bscs_grades->where('year_lvl', $year_lvl)->where('sem', $sem)->count();
        
        $this->$totalUnitsVar = $units;
        $this->$countGradesVar = $countGrades;
        $this->$totalGradesVar = $countGrades > 0 ? number_format($sumGrades / $countGrades, 2) : 0;
    }
}


