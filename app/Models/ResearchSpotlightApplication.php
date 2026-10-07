<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResearchSpotlightApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'institution',
        'position',
        'country',
        'research_title',
        'focus_area',
        'research_summary',
        'motivation',
        'profile_link',
        'photo',
        'status',
    ];
}
