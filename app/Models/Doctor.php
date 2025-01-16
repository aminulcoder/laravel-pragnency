<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
     protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'designation',
        'bio_data',
        'type',
        'email',
        'password',
        'photo',

    ];
}


