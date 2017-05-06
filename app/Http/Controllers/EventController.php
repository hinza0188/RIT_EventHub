<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use DB;
use Auth;

class EventController extends Controller {
    public function index() {
        $events = Event::all()->reverse();
        return view('event.browseAllEvents', compact('events'));
    }

    public function show($id) {
        $event = Event::find($id);

        $successfully_joined = session('successfully_joined');

        //---------------  Load Attending users ---------------//

        // grab all the user id's who are attending this event
        $attending_query = DB::table('event_user')->where('event_id',$id)->get();

        // holds the formatted names of all attendees
        $attendees = [];

        foreach ($attending_query as $item){

            // grab user object
            $user = User::find($item->user_id);

            // format the first and last name
            $username = "$user->first_name $user->last_name";

            // add formatted name to array
            array_push($attendees, $username);
        }



        //---------------    Load Interested users ---------------//

        // grab all people that are interested
        $interested_query = DB::table('interested')->where('event_id',$id)->get();


        // holds the formatted names of all interested users
        $interested_users = [];

        foreach ($interested_query as $item){

            // grab user object
            $user = User::find($item->user_id);

            // format the first and last name
            $username = "$user->first_name $user->last_name";

            // add formatted name to array
            array_push($interested_users, $username );
        }


        // create dictionary to be passed to view
        $dict = ['attendees'=>$attendees, 'interested_users' => $interested_users ,'event'=>$event,'success' => $successfully_joined];

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
        $event = Event::find($eid);



        //---------------  don't allow users to mark themselves as interested if they have already joined --------------- //


        // grab all people that are interested
        $attending_query = DB::table('event_user')->where('event_id',$eid)->get();

        $is_attending = false;

        // check to see if we are attending the event
        foreach ($attending_query as $item){
            if( $item->user_id == $uid){
                $is_attending = true;
                break;
            }
        }


        //---------------  prevent users from marking themselves interested more than once ---------------//

        // grab all the user id's who are attending this event
        $interested_query = DB::table('interested')->where('event_id',$eid)->get();

        $is_interested = false;

        // look for matching user id
        foreach ($interested_query as $item){
            if( $item->user_id == $uid){
                $is_interested = true;
                break;
            }
        }

        // if we have not marked ourselves as interested and we have not joined the event,
        // mark ourselves as interested
        if(!$is_interested && !$is_attending){
            $event->get_interested()->attach($uid);
            $event->interested++;
            $event->save();
        }

        return redirect()->route('event.show', ['$id'=>$eid]);
    }


    public function join($eid, $uid) {
        $event = Event::find($eid);

        //---------------  remove users from interested list when they join --------------- //


        // grab all people that are interested
        $interested_query = DB::table('interested')->where('event_id',$eid)->get();

        // remove yourself from interested table if you join the event
        foreach ($interested_query as $item){
            if( $item->user_id == $uid){
                $event->get_interested()->detach($uid);
                $event->interested--;
                $event->save();
                break;
            }
        }

        //---------------  prevent users from joining more than once ---------------//

        // grab all the user id's who are attending this event
        $attending_query = DB::table('event_user')->where('event_id',$eid)->get();

        $is_joined = false;

        // look for matching user id
        foreach ($attending_query as $item){
            if( $item->user_id == $uid){
                $is_joined = true;
                break;
            }
        }

        $successfully_joined = false;

        // if we have not joined, join the event
        if(!$is_joined){
            $event->get_joined()->attach($uid);
            $event->joined++;   // increment the number of attendee
            $event->save();     // and save it
            $successfully_joined = true;
        }

        session(['successfully_joined' => $successfully_joined]);

        return redirect()->route('event.show',['$id'=>$eid]);
    }

    public function myEvents(){
        $userID = Auth::user()->id;
        $user = Auth::user();
        $allevents = Event::all();

        // add a user's created events to their events
        $eventsCreated = Event::all()->where('creator_id', $userID);

        // add a user's interested events to their events
        $eventsInterested = [];
        foreach ($allevents as $event){
            $interested_query = DB::table('interested')->where('event_id',$event->id)->get();
            foreach ($interested_query as $user_i){
                if ($user_i = $user){
                    array_push($eventsInterested, $event);
                }
            }
        }

        // add a user's joined events to their events
        $eventsJoined = [];
        foreach ($allevents as $event){
            $joined_query = DB::table('event_user')->where('event_id',$event->id)->get();
            foreach ($joined_query as $user_j){
                if ($user_j = $user){
                    array_push($eventsJoined, $event);
                }
            }
        }

        return view('event.myEvents', compact('eventsCreated', 'eventsInterested', 'eventsJoined'));
    }

}
