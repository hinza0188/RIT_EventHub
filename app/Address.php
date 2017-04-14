<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address_1', 'address_2', 'city', 'state', 'zip_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
    ];


    /**
     * Address may have one dedicated user
     */
    public function get_user() {
        return $this->belongsTo(User::class);
    }
}
