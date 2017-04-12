<?php

namespace App;
use Auth;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = [
        'title', 'description', 'location',
    ];

    public function save(array $options = array())
    {
        if( ! $this->creator_id)
        {
            $this->creator_id = Auth::user()->id;
        }

        parent::save($options);
    }
}
