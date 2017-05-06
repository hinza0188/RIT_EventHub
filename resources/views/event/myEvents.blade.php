@extends('layouts.base_page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/browseEvents.css')}}" type="text/css">
@endsection


@section('content')

    {{--<body onload="init();" onmousedown="collapse();">--}}
    <div class="spacer"></div>
    <div class="event-container">
        <h1>Created</h1>
        @foreach ($eventsCreated as $event)


            {{--  Begin Event  --}}
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
                            {{-- Number of people attending--}}
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ $event->joined }} / {{ $event->max }}</p><br/>
                            <h4 class="pull-right"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{ $event->interested }}</h4>
                        </div>
                    </div>
                </div>



                <div class="lg-container">

                    <div class="column">
                        <figure class="thumb">
                            <img  src="{{ asset($event->imgURL) }}" alt="picture">               {{-- Event picture--}}
                        </figure>{{--This figure elment holds the picture--}}
                        <button class="join-button event-font btn-lg" onclick="window.location = '/event/{{$event->id}}/{{Auth::user()->id}}/join' "><i class="fa fa-sign-in" aria-hidden="true"></i> Join</button>
                        <button class="interested-button event-font" onclick="window.location = '/event/{{$event->id}}/{{Auth::user()->id}}/interested' "><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Interested</button>
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
                                <h3>{{ $event->joined }} / {{ $event->max }}</h3>                   {{-- Number of people attending--}}
                            </li>

                            <li>
                                <img class="icon" src="/images/temp/icons/thumbs_up.png">
                                <h3>{{ $event->interested }}</h3>                                   {{-- Number of people interested--}}
                            </li>

                            <li>
                                <img class="icon" src="/images/temp/icons/map-icon.png">
                                <h3>{{ $event->location }}</h3>
                            </li>

                            <li>
                                <img class="icon" src="/images/temp/icons/clock-icon.png">
                                <h3>
                                    {{ $event->date }}                                              {{-- Date --}}
                                </h3>
                            </li>
                        </ul>

                        <button class="event-page-button event-font" onclick="window.location = '{{ route('event.show', ['$id'=>$event->id]) }}'"><i class="fa fa-external-link-square" aria-hidden="true"></i> View Event Page </button>


                    </div>



                </div>

            </div>
            {{-- End Event --}}

        @endforeach

    </div>
    <div class="event-container">
        <h1>Joined</h1>
        @foreach ($eventsJoined as $event)


            {{--  Begin Event  --}}
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
                            {{-- Number of people attending--}}
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ $event->joined }} / {{ $event->max }}</p><br/>
                            <h4 class="pull-right"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{ $event->interested }}</h4>
                        </div>
                    </div>
                </div>



                <div class="lg-container">

                    <div class="column">
                        <figure class="thumb">
                            <img  src="{{ asset($event->imgURL) }}" alt="picture">               {{-- Event picture--}}
                        </figure>{{--This figure elment holds the picture--}}
                        <button class="join-button event-font btn-lg" onclick="window.location = '/event/{{$event->id}}/{{Auth::user()->id}}/join' "><i class="fa fa-sign-in" aria-hidden="true"></i> Join</button>
                        <button class="interested-button event-font" onclick="window.location = '/event/{{$event->id}}/{{Auth::user()->id}}/interested' "><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Interested</button>
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
                                <h3>{{ $event->joined }} / {{ $event->max }}</h3>                   {{-- Number of people attending--}}
                            </li>

                            <li>
                                <img class="icon" src="/images/temp/icons/thumbs_up.png">
                                <h3>{{ $event->interested }}</h3>                                   {{-- Number of people interested--}}
                            </li>

                            <li>
                                <img class="icon" src="/images/temp/icons/map-icon.png">
                                <h3>{{ $event->location }}</h3>
                            </li>

                            <li>
                                <img class="icon" src="/images/temp/icons/clock-icon.png">
                                <h3>
                                    {{ $event->date }}                                              {{-- Date --}}
                                </h3>
                            </li>
                        </ul>

                        <button class="event-page-button event-font" onclick="window.location = '{{ route('event.show', ['$id'=>$event->id]) }}'"><i class="fa fa-external-link-square" aria-hidden="true"></i> View Event Page </button>


                    </div>



                </div>

            </div>
            {{-- End Event --}}

        @endforeach

    </div>

    <div class="event-container">
        <h1>Interested</h1>
        @foreach ($eventsInterested as $event)


            {{--  Begin Event  --}}
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
                            {{-- Number of people attending--}}
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ $event->joined }} / {{ $event->max }}</p><br/>
                            <h4 class="pull-right"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{ $event->interested }}</h4>
                        </div>
                    </div>
                </div>



                <div class="lg-container">

                    <div class="column">
                        <figure class="thumb">
                            <img  src="{{ asset($event->imgURL) }}" alt="picture">               {{-- Event picture--}}
                        </figure>{{--This figure elment holds the picture--}}
                        <button class="join-button event-font btn-lg" onclick="window.location = '/event/{{$event->id}}/{{Auth::user()->id}}/join' "><i class="fa fa-sign-in" aria-hidden="true"></i> Join</button>
                        <button class="interested-button event-font" onclick="window.location = '/event/{{$event->id}}/{{Auth::user()->id}}/interested' "><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Interested</button>
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
                                <h3>{{ $event->joined }} / {{ $event->max }}</h3>                   {{-- Number of people attending--}}
                            </li>

                            <li>
                                <img class="icon" src="/images/temp/icons/thumbs_up.png">
                                <h3>{{ $event->interested }}</h3>                                   {{-- Number of people interested--}}
                            </li>

                            <li>
                                <img class="icon" src="/images/temp/icons/map-icon.png">
                                <h3>{{ $event->location }}</h3>
                            </li>

                            <li>
                                <img class="icon" src="/images/temp/icons/clock-icon.png">
                                <h3>
                                    {{ $event->date }}                                              {{-- Date --}}
                                </h3>
                            </li>
                        </ul>

                        <button class="event-page-button event-font" onclick="window.location = '{{ route('event.show', ['$id'=>$event->id]) }}'"><i class="fa fa-external-link-square" aria-hidden="true"></i> View Event Page </button>


                    </div>



                </div>

            </div>
            {{-- End Event --}}

        @endforeach

    </div>

@endsection
