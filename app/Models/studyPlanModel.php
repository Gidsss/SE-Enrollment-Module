<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyPlanModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentid',
        'student_name',
        'yearlvl',
        'daterequest',
        'status',
        'validation_pdfs',
        'studentprograms'
    ];
}
