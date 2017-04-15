@extends('layouts.base_page')

@section('content')

    <div style="margin-top: 168.88px;">
        <h1> {{ $event->title }}</h1>
        <body>
            <p> Description: {{ $event->description }} </p>
            <p> Location:  {{ $event->location }} </p>
            <p> Date: {{ $event->date }}</p>
            <img src="{{ asset($event->imgURL) }}">
            <div>
                <button class="join-button" onclick="window.location = '/event/{{$event->id}}/{{Auth::user()->id}}/join' ">Join</button>
                <button class="interested-button" onclick="window.location = '/event/{{$event->id}}/{{Auth::user()->id}}/interested' ">Interested</button>
            </div>
        </body>
    </div>


@endsection