@extends('layouts.base_page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/parallax/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slideshow/slideshow.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/event.css')}}" type="text/css">

@endsection

@section('js')
    <script src="{{asset('js/slideshow.js')}}"></script>
    <script src="{{asset('js/scroll.js')}}"></script>
    <script>
        // load parallax javascript asdf
        loadParallaxEffect();
    </script>
@endsection

@section('content')

<section id="banner" class="module parallax banner black" style="opacity: 1">

    <div class="main-container">
        <div class="banner-content">

            <div class="column-left">

                <div class="mission-statement">

                    <h2>Our Mission</h2>
                    <hr>
                    <p class="statement">
                        RIT is full of people from all walks of life, each with their own
                        interests and ideologies. Our goal is to provide a simple way for
                        students to connect with other students. Organizing events with
                        your friends and fellow students should be intuitive and engaging.
                    </p>

                    <p>
                        Enter our solution, the RIT Event Hub! A place where you can create,
                        organize, and join events held by clubs, individuals and faculty.
                        So what are you waiting for? Go ahead and join some events and meet
                        some new people!
                    </p>


                </div>

            </div>

            <div class="column-right">

                <h1 id="welcome">Welcome!</h1>
            </div>
        </div>
    </div>
</section>



<main class="main-container">



    <section class="module content white">


        {{-- Begin Slideshow --}}
        <div class="slideshow-container">


            <div class="trending-slides fade">

                {{-- Begin Trending Element 1 HTML--}}
                <div class="content-container">
                    <h2>Trending</h2>

                    <div class="trending-container">

                        <img class="trending-photo" src="../images/temp/HvZ.jpg">

                        <div class="content">


                            <div class="column-left">
                                <h1>Humans VS Zombies</h1>
                                <hr>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Etiam maximus, mauris et mattis semper, mi
                                    sem elementum nisi, id vulputate arcu lectus a lectus.
                                    Ut tempor, eros sit amet placerat mattis, lectus sem interdum
                                    lectus, non volutpat mi tellus vitae massa.
                                </p>
                            </div>

                            <div class="column-right">


                                <div class="attendance">
                                    <img class="icon" src="../images/temp/icons/person-icon.png">
                                    <h3>188/200</h3>
                                </div>
                                <div class="location">
                                    <img class="icon" src="../images/temp/icons/map-icon.png">
                                    <h3>NRH</h3>
                                </div>
                                <div class="time">
                                    <img class="icon" src="../images/temp/icons/clock-icon.png">
                                    <h3>
                                        04/03/2017
                                        08:00PM
                                    </h3>
                                </div>

                                <div class="buttons">
                                    <button class="join">Join</button>
                                    <button class="interested">Interested</button>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
                {{-- End of Trending HTML 1--}}

            </div>


            <div class="trending-slides fade">
                {{-- Begin Trending Element HTML 2--}}
                <div class="content-container">
                    <h2>Trending</h2>

                    <div class="trending-container">

                        <img class="trending-photo" src="../images/temp/OW_PS4_3P_SOLDIER76SMALL.png">

                        <div class="content">


                            <div class="column-left">
                                <h1>OverWatch Survival</h1>
                                <hr>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Etiam maximus, mauris et mattis semper, mi
                                    sem elementum nisi, id vulputate arcu lectus a lectus.
                                    Ut tempor, eros sit amet placerat mattis, lectus sem interdum
                                    lectus, non volutpat mi tellus vitae massa.
                                </p>
                            </div>

                            <div class="column-right">


                                <div class="attendance">
                                    <img class="icon" src="../images/temp/icons/person-icon.png">
                                    <h3>36/36</h3>
                                </div>
                                <div class="location">
                                    <img class="icon" src="../images/temp/icons/map-icon.png">
                                    <h3>Gollisano Gaming Lab</h3>
                                </div>
                                <div class="time">
                                    <img class="icon" src="../images/temp/icons/clock-icon.png">
                                    <h3>
                                        06/19/2017
                                        08:00PM
                                    </h3>
                                </div>

                                <div class="buttons">
                                    <button class="join">Join</button>
                                    <button class="interested">Interested</button>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
                {{-- End of Trending HTML 2--}}
            </div>


            <div class="trending-slides fade">
                {{-- Begin Trending Element HTML 3--}}
                <div class="content-container">
                    <h2>Trending</h2>

                    <div class="trending-container">

                        <img class="trending-photo" src="../images/temp/images.jpeg">

                        <div class="content">


                            <div class="column-left">
                                <h1>Valentines Showing</h1>
                                <hr>
                                <p class="description">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit. Etiam maximus, mauris et mattis semper, mi
                                    sem elementum nisi, id vulputate arcu lectus a lectus.
                                    Ut tempor, eros sit amet placerat mattis, lectus sem interdum
                                    lectus, non volutpat mi tellus vitae massa.
                                </p>
                            </div>

                            <div class="column-right">


                                <div class="attendance">
                                    <img class="icon" src="../images/temp/icons/person-icon.png">
                                    <h3>97/120</h3>
                                </div>
                                <div class="location">
                                    <img class="icon" src="../images/temp/icons/map-icon.png">
                                    <h3>Gosnell 8-1250</h3>
                                </div>
                                <div class="time">
                                    <img class="icon" src="../images/temp/icons/clock-icon.png">
                                    <h3>
                                        02/09/2017
                                        08:00PM
                                    </h3>
                                </div>

                                <div class="buttons">
                                    <button class="join">Join</button>
                                    <button class="interested">Interested</button>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
                {{-- End of Trending HTML 3--}}
            </div>


            <a class="prev" onclick="trending.plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="trending.plusSlides(1)">&#10095;</a>
        </div>

        <br>

        <div style="text-align:center">
            <span class="dot" onclick="trending.currentSlide(1)"></span>
            <span class="dot" onclick="trending.currentSlide(2)"></span>
            <span class="dot" onclick="trending.currentSlide(3)"></span>
        </div>
        {{-- End Slideshow --}}




    </section>

    <section class="module content white">
        <div class="content-container" style="padding-bottom: 0px;">
            <h2 style="margin-bottom: 0px;">Upcoming</h2>
        </div>
        {{-- Begin Slideshow --}}
        <div class="slideshow-container">

            @foreach($upcoming as $item)
            <div class="upcoming-slides fade">

                <div class="content-container" style="overflow:hidden;">
                    <div class="event">
                        <div class="sm-container">

                            <div class="thumb" style="height: 150px; width: 100%;">
                                <img  src="{{ asset($item->imgURL) }}" alt="picture">                   {{-- Event picture--}}
                            </div>{{--This figure elment holds the picture--}}

                            <div class="info">

                                <div class="column" style="text-align: left;">
                                    <h3>{{ $item->title }}</h3>                                            {{-- Event title--}}
                                    <h4>{{ $item->date }}</h4>                                                         {{-- Date --}}
                                </div>

                                <div class="column attending">
                                    <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> {{ $item->joined }} / {{ $item->max }}</p><br/>
                                    <h4 class="pull-right"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> {{ $item->interested }}</h4>
                                </div>
                            </div>
                        </div>

                        <div class="lg-container">

                            <div class="column">
                                <figure class="thumb">
                                    <img  src="{{ asset($item->imgURL) }}" alt="picture">               {{-- Event picture--}}
                                </figure>{{--This figure elment holds the picture--}}
                                <button style="font-size:1em;" class="join-button" onclick="window.location = '/event/{{$item->id}}/{{Auth::user()->id}}/join' "><i class="fa fa-sign-in" aria-hidden="true"></i> Join</button>
                                <button style="font-size:1em;" class="interested-button" onclick="window.location = '/event/{{$item->id}}/{{Auth::user()->id}}/interested' "><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Interested</button>
                            </div>


                            <div class="column info">
                                <h1>{{ $item->title }}</h1>                                                {{-- Event title--}}
                                <hr>

                                <p class="description">
                                    {{ $item->description }}                                               {{-- Event title--}}
                                </p>

                                <ul>
                                    <li>
                                        <img class="icon" src="/images/temp/icons/person-icon.png">
                                        <h3>{{ $item->joined }} / {{ $item->max }}</h3>                                                       {{-- Number of people attending--}}
                                    </li>

                                    <li>
                                        <img class="icon" src="/images/temp/icons/thumbs_up.png">
                                        <h3>{{ $item->interested }}</h3>                                   {{-- Number of people interested--}}
                                    </li>

                                    <li>
                                        <img class="icon" src="/images/temp/icons/map-icon.png">
                                        <h3>{{ $item->location }}</h3>
                                    </li>

                                    <li>
                                        <img class="icon" src="/images/temp/icons/clock-icon.png">
                                        <h3>
                                            {{ $item->date }}                                                        {{-- Date --}}
                                        </h3>
                                    </li>
                                </ul>

                                <button style="font-size:1em;" class="event-page-button" onclick="window.location = '{{ route('event.show', ['$id'=>$item->id]) }}'"><i class="fa fa-external-link-square" aria-hidden="true"></i> View Event Page </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


            <a class="prev" onclick="upcoming.plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="upcoming.plusSlides(1)">&#10095;</a>
        </div>

        <br>

        {{-- End Slideshow --}}
    </section>

    <section class="module content white">
        <div class="content-container">


                <h2>
                    My Events
                </h2>
                <ul>
                    <li>
                       <input type="checkbox" name="owned"> Owned
                    </li>
                    <li>
                        <input type="checkbox" name="joined"> Joined
                    </li>
                    <li>
                        <input type="checkbox" name="interested"> Interested
                    </li>
                </ul>

            <div class="content" style="overflow: hidden">

                @foreach ($joined_events as $event)




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
                                    <button style="font-size:1em;" class="join-button" onclick="window.location = '/event/{{$item->id}}/{{Auth::user()->id}}/join' "><i class="fa fa-sign-in" aria-hidden="true"></i> Join</button>
                                    <button style="font-size:1em;" class="interested-button" onclick="window.location = '/event/{{$item->id}}/{{Auth::user()->id}}/interested' "><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Interested</button>
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
                                                {{ $event->date }}                                                        {{-- Date --}}
                                            </h3>
                                        </li>
                                    </ul>

                                    <button style="font-size:1em;" class="event-page-button event-font" onclick="window.location = '{{ route('event.show', ['$id'=>$event->id]) }}'"><i class="fa fa-external-link-square" aria-hidden="true"></i> View Event Page </button>



                                </div>



                            </div>

                        </div>
                        {{-- End Event --}}


                @endforeach
            </div>


        </div>
    </section>

</main>


@endsection