<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
     protected $fillable = [
        'name',
        'email',
        'phone',
        'clinic',
        'dob',
        'specialization',
        'experience',
        'gender',
        'address',
        'country',
        'city',
        'postcode',
        'status'
    ];
}


