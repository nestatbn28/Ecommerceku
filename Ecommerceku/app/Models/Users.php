<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'email_verified_at',
        'password',
        'pin',
        'phone',
        'phone_verified_at',
        'account_type',
        'account_role',
        'photo',
        'last_login',
        'created_at',
        'updated_at',
        'remember_token',
        'password_reset_code',
        'device_token',
        'account_status',
    ];

   
}
