<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

/*
 *
Client ID: 3
Client Secret: 9da6T92muA5MZgfEMjYcod3A5iORsNzMQqtfDpiT
Client ID: 4
Client Secret: wxBYSqtPVDv7yiXAaTjWYLiiJSKpSfPVNW8PpeVd
 * */