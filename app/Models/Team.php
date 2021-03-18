<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name', 'post', 'mobile', 'fb_link', 'insta_link', 'photo'
    ];
}
