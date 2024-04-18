<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockCount extends Model
{
    use HasFactory;
    protected $fillable = ['year_level', 'blocks'];

    protected $table = 'block_counts';
}
