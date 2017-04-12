@extends('layouts.base_page')

@section('content')

    <body onload="init();" onmousedown="collapse();">

    <div style="margin-top: 175px;">
        <div id="events" style="margin-top: 175px;">
            @foreach ($events as $event)
                <a style="cursor: pointer;" onclick="expand({{$event}});">
                    <div class="eventCard">
                        <img src="" alt="[Pic here]" title="Event" />
                        <div>{{ $event->title }}</div>
                        <div>{{ $event->location }}</div>

                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div id="expand-block" style="margin-top: 175px;">
        <div id="expand-content">
            <h1 id="expand-title">Event Title</h1>
            <img id="expand-image" src="" />
            <div class="buttons">
                <button class="join">Join</button>
                <button class="interested">Interested</button>
                <a id="expand-redirect"> <button class="main"> View Event Page </button> </a>
            </div>
            <p id="expand-description">Event description</p>
            <p id="expand-location">Location</p>

        </div>
    </div>

    <br/><br/><br/>

    </body>

    <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/browseEvents.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/parallax/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slideshow/slideshow.css')}}" type="text/css">
    <script src="{{asset('js/slideshow.js')}}"></script>
    <script src="{{asset('js/scroll.js')}}"></script>
    <script src="{{asset('js/eventExpand.js')}}"></script>

    <script>
        // load parallax javascript
        loadParallaxEffect();
    </script>

@endsection