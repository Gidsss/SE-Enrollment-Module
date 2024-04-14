<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<string, mixed>
     */
    protected $fillable = [
        'course_code',
        'course_name',
        'units',
        'pre_requisites',
        'grades',
        'year_lvl',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    protected $table = 'courses';
}
