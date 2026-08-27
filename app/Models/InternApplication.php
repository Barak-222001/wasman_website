<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternApplication extends Model
{
   protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'institution',
        'program',
        'area',
        'reason',
        'document',
    ];
}
