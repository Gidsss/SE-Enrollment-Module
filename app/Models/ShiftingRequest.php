<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShiftingRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_id', 
        'student_name',
        'year_level',
        'date_of_request',
        'status',
        'study_plan',
        'letter_of_intent',
        'note_of_undertaking',
        'shifting_form',
    ];
    protected $table = 'shifting_requests';
}
