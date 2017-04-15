@extends('layouts.base_page')

@section('content')

    <div style="margin-top: 168.88px;">
        <h1> {{ $event->title }}</h1>
        <body>
            <p> Description: {{ $event->description }} </p>
            <p> Location:  {{ $event->location }} </p>
            <p> Date: {{ $event->date }}</p>
            <img src="{{ asset($event->imgURL) }}">
        </body>
    </div>


@endsection