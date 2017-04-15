<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Event extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'location', 'imgURL', 'date',
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
}
