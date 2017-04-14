<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * User may have one dedicated address
     */
    public function get_address() {
        return $this->hasOne(Address::class);
    }

    /**
     * User may have many phone number
     */
    public function get_phone_number() {
        return $this->hasMany(Phone_number::class);
    }
}
