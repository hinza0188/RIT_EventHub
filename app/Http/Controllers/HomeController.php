<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $curr_id = Auth::id();

        // grab all event id's that the user is attending
        $attending_query = DB::table('event_user')->where('user_id',$curr_id)->get();

        $joined_events = [];
        // query and add up all joined events
        foreach ($attending_query as $item){
            $current = Event::find($item->event_id);
            array_unshift($joined_events,$current);
        }

        $upcoming = DB::table('events')->where('date', '>', Carbon::today())->limit(3)->orderBy('date', 'asc')->get();
        return view('home',['joined_events'=>$joined_events, 'upcoming'=>$upcoming]);
    }

}
