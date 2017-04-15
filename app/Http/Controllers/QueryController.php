<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        {
            // Gets the query string from our form submission
            $query = request()->get('search');
            // Returns an array of articles that have the query string located somewhere within
            // our articles titles. Paginates them so we can break up lots of search results.
            $events = Event::where('title', 'LIKE', '%'.$query.'%')->get();

            // returns a view and passes the view the list of articles and the original query.
            return view('event.browseAllEvents', compact('events'));

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

    public function search()
    {
        // Gets the query string from our form submission
        $query = request()->input('search');
        // Returns an array of articles that have the query string located somewhere within
        // our articles titles. Paginates them so we can break up lots of search results.
        $articles = Event::all(); //->where('title', 'LIKE', '%' . $query . '%');

        // returns a view and passes the view the list of articles and the original query.
        return view('event.browseAllEvents', compact('articles'));

    }
}
