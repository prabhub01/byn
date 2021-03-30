<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_id', 'full_name', 'gender', 'valid_upto', 'occupation', 'education', 'mobile', 'phone', 'age', 'email'
    ];
}
