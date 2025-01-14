<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasApiTokens, HasRoles, HasFactory, Notifiable ;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'social_id',
        'username',
        'first_name',
        'last_name',
        'name',
        'age',
        'gender',
        'photo',
        'social_photo',
        'child_number',
        'login_type',
        'user_type',
        'edd_date',
        'edd_calculation_type',
        'email',
        'language',
        'pregnancy_loss',
        'pregnancy_loss_date',
        'baby_already_born',
        'bio_data',
        'country',
        'subscription',
        'is_profile_complete',
        'lmp_date',
        'deleted',
        'deleted_date',
        'status',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
