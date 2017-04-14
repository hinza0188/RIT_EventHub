@extends('layouts.base_page')

@section('content')

    <body onload="init();" onmousedown="collapse();">

    <div style="margin-top: 175px;">
        <div id="events" style="margin-top: 175px;">
            @foreach ($events as $event)


                {{-- Begin Event --}}
                <div class="event">
                    <div class="sm-container">

                        <div class="thumb" style="height: 150px; width: 100%;">
                            <img  src="{{ asset($event->imgURL) }}" alt="picture">                   {{-- Event picture--}}
                        </div>{{--This figure elment holds the picture--}}

                        <div class="info">

                            <div class="column" style="text-align: left;">
                                <h3>{{ $event->title }}</h3>                                            {{-- Event title--}}
                                <h4>4/1/17</h4>                                                         {{-- Date --}}
                            </div>

                            <div class="column attending">
                                <p>12/40</p>                                                            {{-- Number of people attending--}}
                                <img src="/images/temp/icons/person-icon.png" alt="icon" class="icon">
                            </div>
                        </div>
                    </div>



                    <div class="lg-container">

                        <div class="column">
                            <figure class="thumb">
                                <img  src="{{ asset($event->imgURL) }}" alt="picture">               {{-- Event picture--}}
                            </figure>{{--This figure elment holds the picture--}}
                            <button class="join-button" onclick="window.location = '' ">Join</button>
                            <button class="interested-button" onclick="window.location = '' ">Interested</button>
                        </div>


                        <div class="column info">
                            <h1>{{ $event->title }}</h1>                                                {{-- Event title--}}
                            <hr>

                            <p class="description">
                                {{ $event->description }}                                               {{-- Event title--}}
                            </p>

                            <ul>
                                <li>
                                    <img class="icon" src="/images/temp/icons/person-icon.png">
                                    <h3>12/40</h3>                                                       {{-- Number of people attending--}}
                                </li>

                                <li>
                                    <img class="icon" src="/images/temp/icons/map-icon.png">
                                    <h3>{{ $event->location }}</h3>
                                </li>

                                <li>
                                    <img class="icon" src="/images/temp/icons/clock-icon.png">
                                    <h3>
                                        04/03/2017                                                        {{-- Date --}}
                                        08:00PM                                                           {{-- Time --}}
                                    </h3>
                                </li>
                            </ul>

                            <button class="event-page-button" onclick="window.location = '' "> View Event Page </button>


                        </div>



                    </div>

                </div>
                {{-- End Event --}}



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