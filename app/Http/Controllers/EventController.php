<?php

namespace App\Http\Controllers;

use app\Event;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = app/Event::all();

        return view('events.index', compact('events'));
    }

    public function show($id){
        $event = app/Event::find($id);

        return view('events.show', compact('event'));
    }
}
