<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Event extends Model
{
    // added extra filed (max), (joined), and (interested) that just stores number.
    // Detailed data goes into many to many relationship tables
    protected $fillable = [
        'title', 'description', 'location', 'imgURL', 'max', 'joined', 'interested', 'date',
    ];

    public function save(array $options = array())
    {
        if( ! $this->creator_id)
        {
            $this->creator_id = Auth::user()->id;
        }

        parent::save($options);
    }

    public function get_users() {
        return $this->belongsToMany(User::class, 'event_user', 'event_id', 'user_id');
    }

    public function get_joined(){
        return $this->belongsToMany('App\User');
    }

    public function get_interested(){
        return $this->belongsToMany('App\User','interested');
    }
}
