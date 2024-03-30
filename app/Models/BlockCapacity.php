<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlockCapacity extends Model
{
    use HasFactory;

    protected $fillable = ['block', 'capacity'];

    protected $table = 'block_capacities';
}