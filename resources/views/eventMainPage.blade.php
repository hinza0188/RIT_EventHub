@extends('layouts.base_page')

@section('content')

    <div style="margin-top: 175px;">
    <h1> {{  $event->title }}</h1>
    <body>
        <p> Description: {{ $event->description }} </p>
        <p> Location:  {{ $event->location }} </p>
        <img src="{{ asset($event->imgURL) }}">
    </body>
    </div>


    <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/parallax/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slideshow/slideshow.css')}}" type="text/css">
    <script src="{{asset('js/slideshow.js')}}"></script>
    <script src="{{asset('js/scroll.js')}}"></script>

    <script>
        // load parallax javascript
        loadParallaxEffect();
    </script>


@endsection