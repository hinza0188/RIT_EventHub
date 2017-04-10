<!DOCTYPE html>

<html lang="en">

<head>
    <title>Home</title>
    <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/parallax/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slideshow/slideshow.css')}}" type="text/css">
    <script src="{{asset('js/slideshow.js')}}"></script>
    <script src="{{asset('js/scroll.js')}}"></script>
</head>

<body>


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


                <div class="mySlides fade">

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


                <div class="mySlides fade">
                    <img src="img2.jpg" style="width:100%">
                </div>


                <div class="mySlides fade">
                    <img src="img3.jpg" style="width:100%">
                </div>


                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            {{-- End Slideshow --}}




        </section>

        <section class="module content lightblue">
            <div class="content-container">


                <h2>Upcoming</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil consequuntur, nesciunt dicta, esse rem ducimus itaque quis. Adipisci ullam nam qui illum debitis sit ad in delectus, repudiandae non dolorum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veritatis, facere aliquid itaque tempore consequatur nihil sint enim aliquam id saepe magnam totam repellat placeat a fugit nulla molestias voluptas.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta cum distinctio eum asperiores rem enim fugit eaque voluptas est laboriosam in repudiandae architecto placeat, illum atque quasi explicabo, culpa, molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit voluptas, aperiam quae provident, recusandae rem quis. Ut quaerat, quasi iste voluptate et dolorem atque sed neque voluptates, molestias dolor enim!</p>

            </div>
        </section>

        <section class="module content white">
            <div class="content-container">


                <h2>My Events</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil consequuntur, nesciunt dicta, esse rem ducimus itaque quis. Adipisci ullam nam qui illum debitis sit ad in delectus, repudiandae non dolorum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veritatis, facere aliquid itaque tempore consequatur nihil sint enim aliquam id saepe magnam totam repellat placeat a fugit nulla molestias voluptas.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta cum distinctio eum asperiores rem enim fugit eaque voluptas est laboriosam in repudiandae architecto placeat, illum atque quasi explicabo, culpa, molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit voluptas, aperiam quae provident, recusandae rem quis. Ut quaerat, quasi iste voluptate et dolorem atque sed neque voluptates, molestias dolor enim!</p>

            </div>
        </section>

    </main>




<script>
    // initialize slideshow with first element
    $(document).ready(function () {
       currentSlide(1);
    });


    loadParallaxEffect();
</script>

</body>

</html>

