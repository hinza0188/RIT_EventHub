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
     * User may have only one dedicated birthday
     */
    public function get_dob() {
        return $this->hasOne(Dob::class);
    }

    /**
     * User may have many phone number
     */
    public function get_phone_numbers() {
        return $this->hasMany(Phone_number::class);
    }

    public function get_events() {
        return $this->hasMany('App\Event');
    }

    public function get_interested_events(){
        return $this->hasMany('App\Event','interested');
    }
}
