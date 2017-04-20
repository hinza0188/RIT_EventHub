<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use DB;
use Symfony\Component\Console\Output\ConsoleOutput;

class EventController extends Controller {
    public function index() {
        $events = Event::all()->reverse();
        return view('event.browseAllEvents', compact('events'));
    }

    public function show($id) {
        $event = Event::find($id);

        // grab all the user id's who are attending this event
        $query_result = DB::table('event_user')->where('event_id',$id)->get();

        // holds the formatted names of all attendees
        $attendees = [];

        foreach ($query_result as $item){

            // get attendee's first and last name
            $first_name = User::find($item->user_id)->first_name;
            $last_name = User::find($item->user_id)->last_name;

            // format the first and last name
            $username = "$first_name $last_name";

            // add formatted name to array
            array_push($attendees, $username );
        }

        // create dictionary to be passed to view
        $dict = ['attendees'=>$attendees, 'event'=>$event];

        return view('event.eventMainPage', $dict);
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

        // grab all attendee's
        $query_result = DB::table('event_user')->where('event_id',$eid)->get();

        foreach ($query_result as $item){
            if( $item->user_id == $uid){

            }
        }



//
//        foreach ($user->get_events() as $event_u) {
//            if ($event===$event_u){
//                $user->get_events()->detach($event);
//                return redirect()->route('event.show', ['$id'=>'$eid']);
//            }
//        }
//
//        $user->get_events()->attach($eid);
        return redirect()->route('event.show', ['$id'=>'$eid']);
    }


    public function join($eid, $uid) {
        $event = Event::find($eid);
        $event->get_joined()->attach($uid);
        return redirect()->route('event.show',['$id'=>$eid]);
    }

}
