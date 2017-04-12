<?php

namespace App\Http\Controllers;

use App\Event;
use Auth;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function browseAll(){
        $events = Event::all();
        return view('browseAllEvents', compact('events'));
    }

    public function eventMain($id){
        $event = Event::find($id);
        return view('eventMainPage', compact('event'));
    }

    public function create(){
        return view('create');
    }

    public function store(){
        $event = Event::create(request()->all());
        return redirect('/events/' . $event->id);

    }
}
