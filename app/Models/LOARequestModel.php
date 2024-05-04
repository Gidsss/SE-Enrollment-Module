<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoARequestModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id', 
        'student_name',
        'year_level',
        'date_of_request',
        'status',
        'study_plan',
    ];
    protected $table = 'l_o_a_requests';
}
