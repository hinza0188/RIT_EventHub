<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;

class EventController extends Controller {
    public function index() {
        $events = Event::all()->reverse();
        return view('event.browseAllEvents', compact('events'));
    }

    public function show($id) {
        $event = Event::find($id);
        return view('event.eventMainPage', compact('event'));
    }

    public function create() {
        return view('event.create');
    }

    public function store() {
        $data = request()->all();
        $data['imgURL'] = 'placeholder';
        $event = Event::create($data);
        if(request()->hasFile('imgURL')){
            $ext = '.' . request()->file('imgURL')->guessClientExtension();
            request()->file('imgURL')->move(base_path() . '/public/images/event_images/', $event->id . $ext);
            $event->imgURL = "images/event_images/" . $event->id . $ext;
        }else{
            $event->imgURL = "images/event_images/default.png";
        }
        $event->save();
        return redirect()->route('event.show', $event->id);
    }

    public function interested($eid, $uid) {
        $user = User::find($uid);
        $event = Event::find($eid);

        foreach ($user->get_events() as $event_u) {
            if ($event===$event_u){
                $user->get_events()->detach($event);
                return redirect()->route('event.show', ['$id'=>'$eid']);
            }
        }

        $user->get_events()->attach($eid);
        return redirect()->route('event.show', ['$id'=>'$eid']);
    }


    public function join($eid, $uid) {
        $user = User::find($uid);
        $event = Event::find($eid);

        foreach ($event->get_users() as $user_e) {
            if ($user===$user_e){
                $event->get_users()->detach($event);
                return redirect()->route('event.show', ['$id'=>'$eid']);
            }
        }

        $event->get_users()->attach($uid);
        return redirect()->route('event.show', ['$id'=>'$eid']);
    }

}
