@extends('layouts.base_page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/parallax/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slideshow/slideshow.css')}}" type="text/css">
@endsection

@section('js')
    <script src="{{asset('js/slideshow.js')}}"></script>
    <script src="{{asset('js/scroll.js')}}"></script>
    <script>
        // load parallax javascript
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

                {{-- Begin Trending Element HTML--}}
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
                {{-- End Trending HTML--}}

            </div>


            <div class="trending-slides fade">

            </div>


            <div class="trending-slides fade">

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


            <div class="upcoming-slides fade">

                <div class="content-container">
                    <h2 style="background: blue">slide one</h2>
                </div>

            </div>


            <div class="upcoming-slides fade">

                <div class="content-container">
                    <h2 style="background: blue">slide two</h2>
                </div>

            </div>


            <div class="upcoming-slides fade">

                <div class="content-container">
                    <h2 style="background: blue">slide three</h2>
                </div>

            </div>


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

            <div class="content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil consequuntur, nesciunt dicta, esse rem ducimus itaque quis. Adipisci ullam nam qui illum debitis sit ad in delectus, repudiandae non dolorum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veritatis, facere aliquid itaque tempore consequatur nihil sint enim aliquam id saepe magnam totam repellat placeat a fugit nulla molestias voluptas.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta cum distinctio eum asperiores rem enim fugit eaque voluptas est laboriosam in repudiandae architecto placeat, illum atque quasi explicabo, culpa, molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit voluptas, aperiam quae provident, recusandae rem quis. Ut quaerat, quasi iste voluptate et dolorem atque sed neque voluptates, molestias dolor enim!</p>
            </div>


        </div>
    </section>

</main>


@endsection