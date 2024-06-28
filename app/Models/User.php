<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{

    use Notifiable;
    
    protected $guard = 'users';
    
    protected $fillable = [
        'referred_by',
        'user_type',
        'name',
        'email',
        'password',
        'profile_pic',
        'phone',
        'address',
        'country',
        'city',
        'state',
        'postal_code',
        'referral_code',
        'is_active',
        'created_at',
        'updated_at'
    ];

    protected $hidden = [
        'referred_by',
        'password',
        'remember_token',
        'referral_code',
        'email_verified_at',
        'is_active',
        'created_at',
        'updated_at'
    ];

    protected $table = 'users';

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function setPasswordAttribute($value){
    //     $this->attributes['password'] = bcrypt($value);
    // }
}
