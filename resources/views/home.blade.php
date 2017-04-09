<!DOCTYPE html>

<html lang="en">

<head>
    <title>Home</title>
    <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/parallax/style.css')}}" type="text/css">

</head>

<body>


    <section id="banner" class="module parallax banner black">
    </section>



    <main class="main-container">


        <section class="module content white">
            <div class="content-container">


                <h2>Trending</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil consequuntur, nesciunt dicta, esse rem ducimus itaque quis. Adipisci ullam nam qui illum debitis sit ad in delectus, repudiandae non dolorum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit veritatis, facere aliquid itaque tempore consequatur nihil sint enim aliquam id saepe magnam totam repellat placeat a fugit nulla molestias voluptas.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta cum distinctio eum asperiores rem enim fugit eaque voluptas est laboriosam in repudiandae architecto placeat, illum atque quasi explicabo, culpa, molestias!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit voluptas, aperiam quae provident, recusandae rem quis. Ut quaerat, quasi iste voluptate et dolorem atque sed neque voluptates, molestias dolor enim!</p>

            </div>
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
        // TODO: Remove this script and properly load this code from js/scroll.js
        (function(){

            var parallax = document.querySelectorAll(".parallax"),
                    speed = 0.5;

            window.onscroll = function(){
                [].slice.call(parallax).forEach(function(el,i){

                    var windowYOffset = window.pageYOffset,
                            elBackgrounPos = "50%" + (windowYOffset * speed) + "px";

                    el.style.backgroundPosition = elBackgrounPos;

                });

            };


        })();




    </script>



</body>

</html>

