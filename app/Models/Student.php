<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id', 
        'student_name',
        'student_block',
        'year_level',
        'student_type',
    ];
    protected $table = 'students';
}
