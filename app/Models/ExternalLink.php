<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'ai',
        'ai_nepal',
        'ai_nepal_activities',
        'int_campaign',
        'campaign_materails',
        'appeal_for_action',
        'national_board',
        'publications'
    ];
}
