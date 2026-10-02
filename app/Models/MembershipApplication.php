<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembershipApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'date_of_birth',
        'gender',
        'phone',
        'email',
        'address',
        'occupation',
        'institution',
        'expertise',
        'education',
        'join_as',
        'join_as_other',
        'membership_type',
        'interest',
        'contribution',
        'contribution_other',
        'declaration',
        'status',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'contribution' => 'array',
        'declaration' => 'boolean',
    ];
}
