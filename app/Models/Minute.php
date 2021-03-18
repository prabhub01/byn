<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Minute extends Model
{
    use HasFactory;
    protected $fillable = [
        'keywords', 'date', 'location', 'participants', 'meeting_type', 'photo1', 'photo2', 'ek_rupaiya'
    ];
}
