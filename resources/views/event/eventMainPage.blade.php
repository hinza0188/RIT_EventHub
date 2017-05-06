@extends('layouts.base_page')

@section('content')

    @if($success)
        <script>
            swal(
                    'Success!',
                    'You just joined {{$event->title}}!',
                    'success'
            )
        </script>
    @endif
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
                <button style="font-size:1em;" class="join-button" onclick="window.location = '/event/{{$event->id}}/{{Auth::user()->id}}/join' "><i class="fa fa-sign-in" aria-hidden="true"></i> Join</button>
                <button style="font-size:1em;" class="interested-button" onclick="window.location = '/event/{{$event->id}}/{{Auth::user()->id}}/interested' "><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Interested</button>
            </div>
        </body>
    </div>


@endsection