@extends('layouts.base_page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/browseEvents.css')}}" type="text/css">
@endsection


@section('content')

    {{--<body onload="init();" onmousedown="collapse();">--}}
    <div class="spacer"></div>
    <div class="event-container">
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
                                <h4>{{ $event->date }}</h4>                                                         {{-- Date --}}
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
                                        {{ $event->date }}                                                        {{-- Date --}}
                                    </h3>
                                </li>
                            </ul>

                            <button class="event-page-button" onclick="window.location = '{{ route('event.show', ['$id'=>$event->id]) }}'"> View Event Page </button>


                        </div>



                    </div>

                </div>
                {{-- End Event --}}



            @endforeach

    </div>

@endsection