@extends('layouts.base_page')

@section('content')
    <script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>



    <style>
        .spacer{
            margin-top: 365px;
        }

        /*  Button css */

        .event-page-button {
            padding: 20px;
            background: #ef8d22;
            border-color: #ef8d22;
            border-radius: 3px;
            margin-top: 20px;
            cursor: pointer;
        }

        .join-button {
            padding: 10px;
            width: 30%;
            margin-top: 10%;
            background-color: #2ecc71;
            border-radius: 3px;
            border-color: #2ecc71;
            cursor: pointer;
        }

        .interested-button {
            padding: 10px;
            width: 30%;
            margin-left: 10%;
            margin-top: 10%;
            background-color: #3498db;
            border-color: #3498db;
            border-radius: 3px;
            cursor: pointer;

        }

        /* event css */

        .event{
            border-radius: 3px;
            border: 5px solid green;
            width: 300px;
            height: 220px;
            overflow: hidden;
            max-width: 850px;
            cursor: pointer;
            /* css transitions */
            -webkit-transition: width 1s, height 1s; /* For Safari 3.1 to 6.0 */
            transition: width 1s, height 1s;

        }


        .event .sm-container{
            padding: 10px;
            text-align: center;
        }
        .event .sm-container h3,h4,p {
            margin-top: 0;
            margin-bottom: 0;
        }

        .event .thumb {
            background-color: #f1eded;
            margin-bottom: 10px;
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
        
        .event .sm-container .thumb-container{
            border-radius: 3px;
            background: #f1eded;
            height:170px;
            margin: 0;
            margin-bottom: 10px;
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
        .event .lg-container h3,h4,p {
            margin-top: 0;
            margin-bottom: 0;
        }
        .event .lg-container img {
            position: relative;
            top: 50%;
            transform: translateY(-50%);

        }
        .event .lg-container .info {
            margin-top: 5px;
        }

        .event .lg-container .column{
            width: 45%;
            float: left;
        }
        .event .lg-container .column.attending p{
            float: right;
        }

        .event .lg-container figure{
            width: 100%;
            max-width: 400px;
            height: 300px;
            background-position: center;
            background-color: #f1eded;

            border-radius: 3px;
            margin: 0;
            padding:0;
        }

        .lg-container hr{
            width: 80%;
            margin-left: 13%;
        }




        .lg-container ul{
            text-align: left;
            list-style-type: none;
            width: 60%;
            margin: auto;

        }
        .lg-container .column h1 {
            margin-bottom: 0;
        }
        .lg-container .column.info{
            width: 55%;
            margin: auto;
        }
        .lg-container .column.info img{
            float: left;
            margin-right: 10px;
        }

        .lg-container .column .description {

            padding: 12%;
            padding-top: 5%;
            padding-bottom: 15px;
            padding-right: 3%;
            padding-left: 3%;

            margin-left: 10%;
            margin-right: 0;
            margin-top: 0;
        }





        /*   toggled css   */

        .lg-container {
            display: none;
        }

        .toggled {
            width: 80%;
            margin: auto;
            height: 450px;
            max-width: 800px;
        }

        .toggled .sm-container {
            display: none;
        }
        .toggled .lg-container {
            display: block;
        }


    </style>

    <div class="spacer"></div>





    {{-- Begin Event --}}
    <div class="event">
        <div class="sm-container">

                <div class="thumb" style="height: 150px; width: 100%;">
                    <img  src="/images/GV_banner.jpg" alt="picture">
                </div>{{--This figure elment holds the picture--}}

            <div class="info">

                <div class="column" style="text-align: left;">
                    <h3>HvZ Meeting</h3>
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
                <figure class="thumb">
                    <img  src="/images/GV_banner.jpg" alt="picture">
                </figure>{{--This figure elment holds the picture--}}
                <button class="join-button" onclick="window.location = '' ">Join</button>
                <button class="interested-button" onclick="window.location = '' ">Interested</button>
            </div>


            <div class="column info">
                <h1>HvZ Meeting</h1>
                <hr>

                <p class="description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Integer vestibulum lectus eget iaculis mattis. Curabitur tempus
                    nisl est, at faucibus nisi viverra id. Cras id ex egestas, commodo
                    ligula eu, venenatis neque. Aliquam erat volutpat. Vivamus erat ipsum,
                    laoreet eu tristique mollis, luctus vitae tortor.
                </p>

                <ul>
                    <li>
                        <img class="icon" src="/images/temp/icons/person-icon.png">
                        <h3>12/40</h3>
                    </li>

                    <li>
                        <img class="icon" src="/images/temp/icons/map-icon.png">
                        <h3>NRH</h3>
                    </li>

                    <li>
                        <img class="icon" src="/images/temp/icons/clock-icon.png">
                        <h3>
                            04/03/2017
                            08:00PM
                        </h3>
                    </li>
                </ul>

                <button class="event-page-button" onclick="window.location = '' "> View Event Page </button>


            </div>



        </div>

    </div>
    {{-- End Event --}}



    <script src="{{ asset('js/jquery-thumbnail-cut.js') }}"></script>

    <script>
        $('.event').click(function () {
            $(this).toggleClass('toggled');
        });
    </script>
@endsection