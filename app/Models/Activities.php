<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'date', 'venue', 'image', 'path', 'participants', 'program_type', 'details'
    ];
}
