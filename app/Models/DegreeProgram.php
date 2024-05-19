<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DegreeProgram extends Model
{
    use HasFactory;
    protected $fillable = [
        'program_code', 
        'program_name',
        'college',
    ];
    protected $table = 'degree_programs';
}
