<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftingRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id', 
        'new_degree_program',
        'study_plan',
        'letter_of_intent',
        'note_of_undertaking',
        'shifting_form',
        'status',
        'date_of_request'
    ];
    protected $table = 'shifting_requests';
}
