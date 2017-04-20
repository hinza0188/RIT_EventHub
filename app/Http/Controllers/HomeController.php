<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Output\ConsoleOutput;
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

        return view('home',['joined_events'=>$joined_events]);
    }

}
