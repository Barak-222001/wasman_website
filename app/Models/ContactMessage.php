<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [

        'full_name',

        'email',

        'phone_number',

        'category',

        'subject',

        'message',

        'attachment',

        'is_read',

    ];

    protected $casts = [

        'is_read' => 'boolean',

    ];
}