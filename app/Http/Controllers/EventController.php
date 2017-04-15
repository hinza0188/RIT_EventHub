<?php

namespace App\Http\Controllers;

use App\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('event.browseAllEvents', compact('events'));
    }

    public function show($id){
        $event = Event::find($id);
        return view('event.eventMainPage', compact('event'));
    }

    public function create(){
        return view('event.create');
    }

    public function store(){
        $data = request()->all();
        $data['imgURL'] = 'placeholder';
        $event = Event::create($data);

        if(request()->hasFile('imgURL')){
            $ext = '.' . request()->file('imgURL')->guessClientExtension();
            request()->file('imgURL')->move(base_path() . '/public/images/event_images/', $event->id . $ext);
            $event->imgURL = "images/event_images/" . $event->id . $ext;
            $event->save();
        }else{
            $event->imgURL = "images/event_images/default.png";
            $event->save();
        }

        return redirect()->route('event.show', $event->id);

    }
}
