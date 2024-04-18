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
        'student_type',
        'year_level',
        'date_request',
        'status',
        'student_block',
    ];
    protected $table = 'students';
}
