<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PartnerApplication extends Model
{
    protected $fillable = [

        'organization_name',

        'contact_person',

        'email',

        'phone_number',

        'country',

        'partnership_type',

        'partnership_message',

    ];
}