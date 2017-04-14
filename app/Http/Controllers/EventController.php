<?php

namespace App\Http\Controllers;

use App\Event;
use Auth;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

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

        return redirect('/events/' . $event->id);

    }
}
