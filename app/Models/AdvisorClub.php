<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvisorClub extends Model
{
    use HasFactory;
    protected $table = 'advisors';
    protected $fillable = [
        'full_name', 'mobile', 'fb_link', 'insta_link', 'photo'
    ];
}
