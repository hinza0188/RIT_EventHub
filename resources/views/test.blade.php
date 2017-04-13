@extends('layouts.base_page')

@section('content')

    <style>
        .spacer{
            margin-top: 365px;
        }


        .event{
            border-radius: 3px;
            border: 5px solid green;
            width: 300px;
            height: 240px;
            overflow: hidden;

            /* css transitions */
            -webkit-transition: width 1s, height 1s; /* For Safari 3.1 to 6.0 */
            transition: width 1s, height 1s;

        }


        .event .sm-container{
            padding: 10px;
            text-align: center;
        }
        .event .sm-container h3,h4,img,p {
            margin-top: 0;
            margin-bottom: 0;
        }

        .event .sm-container img {
            max-height: 165px;
            max-width: 200px;
        }

        .event .sm-container .info {
            margin-top: 5px;
        }

        .event .sm-container .info .column{
            width: 50%;
            float: left;
        }
        .event .sm-container .info .column.attending p{
            float: right;
        }
        
        .event .sm-container figure{
            border-radius: 3px;
            background: #f1eded;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .event .icon {
            float: right;
            width: 20px;
        }



        /* lg container css*/


        .event .lg-container{
            padding: 10px;
            text-align: center;
        }
        .event .lg-container h3,h4,img,p {
            margin-top: 0;
            margin-bottom: 0;
        }

        .event .lg-container .info {
            margin-top: 5px;
        }

        .event .lg-container .column{
            width: 50%;
            float: left;
        }
        .event .lg-container .column.attending p{
            float: right;
        }

        .event .lg-container figure{
            width: 100%;
            max-width: 400px;
            height: 300px;
            background:url("/images/temp/HvZ.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-color: #f1eded;;

            border-radius: 3px;
            margin: 0;
            padding: 20px;
        }

        .lg-container hr{
            width: 80%;
        }


        .lg-container .attendance {
            font-size: 20pt;
            text-align: left;
        }
        .lg-container .attendance img{
            float: left;
            width: 40px;
        }


        .lg-container .location  {
            font-size: 20pt;
            text-align: left;
        }
        .lg-container .location img {
            float: left;
            width: 40px;

        }

        .lg-container .time  {
            font-size: 20pt;
            text-align: left;
        }
        .lg-container .time img{
            float: left;
            width: 40px;

        }




        /*   toggled css   */

        .lg-container {
            display: none;
        }

        .toggled {
            width: 80%;
            height: 500px;
            margin: auto;
        }

        .toggled .sm-container {
            display: none;
        }
        .toggled .lg-container {
            display: block;
        }





    </style>

    <div class="spacer"></div>

    <div class="event">
        <div class="sm-container">
            <figure>
                <img src="/images/temp/HvZ.jpg" alt="picture">
            </figure>

            <div class="info">

                <div class="column" style="text-align: left;">
                    <h3>Study Meeting</h3>
                    <h4>4/1/17</h4>
                </div>

                <div class="column attending">
                    <p>12/40</p>
                    <img src="/images/temp/icons/person-icon.png" alt="icon" class="icon">
                </div>
            </div>
        </div>




        <div class="lg-container">

            <div class="column">
                <figure></figure>{{--This figure elment holds the picture--}}
            </div>


            <div class="column info">
                <h1>Study Meeting</h1>

                <div class="attendance">
                    <img class="icon" src="/images/temp/icons/person-icon.png">
                    <h3>188/200</h3>
                </div>
                <div class="location">
                    <img class="icon" src="/images/temp/icons/map-icon.png">
                    <h3>NRH</h3>
                </div>
                <div class="time">
                    <img class="icon" src="/images/temp/icons/clock-icon.png">
                    <h3>
                        04/03/2017
                        08:00PM
                    </h3>
                </div>

            </div>



        </div>

    </div>



    <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>

    <script>
        $('.event').click(function () {
            $(this).toggleClass('toggled');
        });
    </script>
@endsection