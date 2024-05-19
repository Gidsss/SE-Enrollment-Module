<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Contracts\Auth\Authenticatable;

class Student extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    use HasFactory;
    protected $fillable = [
        'student_id', 
        'student_name',
        'password',
        'student_type',
        'year_level',
        'student_block',
        'degree_program',
        'enrolled', // This field is used to determine if the student is enrolled or not
    ];
    protected $table = 'students';
}
