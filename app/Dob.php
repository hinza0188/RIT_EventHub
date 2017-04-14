<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dob : stands for Date of Birth
 * @package App
 */
class dob extends Model {
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date',
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
     * Entire phone number in string format
     */
    public function to_string() {
        // '('.area_code.')'.middle_code.-.last_code
        return null;
    }

    /**
     * Phone number may have one dedicated User
     */
    public function get_user() {
        return $this->belongsTo(User::class);
    }
}
