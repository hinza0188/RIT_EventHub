@extends('layouts.base_page')

@section('content')

    <div style="margin-top: 168.88px;">
        <h1> {{ $event->title }}</h1>
        <body>

            <p> Description: {{ $event->description }} </p>
            <p> Location:  {{ $event->location }} </p>
            <p> Date: {{ $event->date }}</p>

            <br>
            <br>

            <h3>Attending( {{ $event->joined }} ):</h3>
            <ul>
                @foreach($attendees as $attendee)
                    <li>{{$attendee}}</li>
                @endforeach
            </ul>

            <h3>Interested( {{ $event->interested }} ):</h3>
            <ul>
                @foreach($interested_users as $user)
                    <li>{{$user}}</li>
                @endforeach
            </ul>

            <img src="{{ asset($event->imgURL) }}">
            <div>
                <button class="join-button" onclick="window.location = '/event/{{$event->id}}/{{Auth::user()->id}}/join' ">Join</button>
                <button class="interested-button" onclick="window.location = '/event/{{$event->id}}/{{Auth::user()->id}}/interested' ">Interested</button>
            </div>
        </body>
    </div>


@endsection