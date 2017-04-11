<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                margin: 0;
                padding: 0;
                /*overflow: hidden;*/
                min-width: 600px
            }


            #footer {
                border-top: solid;
                border-top-color: orange;
                padding: 1rem;
                color: white;
                background-color: black;
                clear: left;
                text-align: left;
                font-size: 17px;
            }


            #container-outer {
                background-color: black;
            }

            header a {
                padding: 1em;
                color: white;
                background-color: #403f3f;
                clear: left;
                text-align: center;
            }

            #header { 
                width: 100%;
                padding: 1em;
                color: white;
                background-color: #403f3f;
                clear: left;
                text-align: center;
                margin:0; 
                padding:0; 
            }

            #header-inner {
                padding:10px;
                background: #403f3f;
                margin-right: 30px;
            }


            /* Logo */
            #logo { 
                padding:5px; 
                width:auto; 
                float:left;
            }

            #logo h1 a, h1 a:hover { 
                color:white; 
                text-decoration:none;
            }

            #logo h1 span { 
                color:#d3d3f9;
            }

            #userNav { 
                margin:0 auto; 
                padding:0px 0 0; 
                height:10px; 
                float:right;
            }

            #userNav ul { 
                list-style:none; 
                padding:0; 
                height:10px; 
                float:right;
            }

            #userNav ul li { 
                margin:0; 
                padding:0 0 0 8px; 
                float:right;
                width: 100px;
            }
            
            #userNav ul li a { 
                display:block;
                margin:0; 
                padding:8px 20px; 
                color:orange; 
                text-decoration:none;
                padding-left: 0;
            }

            #userNav .welcome{
                width: 100px;
            }

            /* Add a black background color to the top navigation */
            .navigation{
                z-index: 999;
                position: fixed;
                top:0;
                width:100%;
            }
            .topNav {
                background-color: black;
                overflow: hidden;
            }


            .topNav a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 50px;
                text-decoration: none;
                font-size: 17px;

            }
            @media only screen and (max-width: 886px) {
                .topNav a {
                    padding: 14px 20px;
                }
            }

            /* Change the color of links on hover */
            .topNav a:hover {
                background-color: #ef8d22;
                border-bottom: 1px solid  #ef8d22;
                color: black;
            }

            /* Add a color to the active/current link */
            .topNav a.active {
                background-color: #ef8d22;
                border-bottom: 1px solid  #ef8d22;
                color: black;
            }

            .searchBar {
                float: right;
                text-align: center;
                padding: 14px 16px;
            }

            /* Clear both sides to assist with div alignment  */
            .clr { 
                clear:both; 
                padding:0; 
                margin:0; 
                width:100%; 
                font-size:0px; 
                line-height:0px;
            }
            
            #bar {

                height: 9px;
                background-color: #ef8d22;
            }

        </style>
    </head>
    <body id="body">
        <div class="content">

            {{-- Begin navigation  --}}
            <div class="navigation">

                <div class="container">
                    <header id="header">
                        <div id="header-inner">
                            <div id="logo">
                                <h1><a href="/home.blade.php">RIT EventHub</a></h1>
                            </div>

                            <div id="userNav">
                                <ul>
                                    <li >
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                        Welcome,<a href="/account.blade.php">Jimmy</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="clr"></div>
                        </div>
                    </header>
                </div>

                <div class="topNav" id="mainNav">
                    <a href="/home.blade.php" type="button">Home</a>
                    <a href="/browse.blade.php" type="button">Browse</a>
                    <a href="/create.blade.php" type="button">Create</a>
                    <a href="/account.blade.php" type="button">Account</a>
                    <form class="searchBar" action="/browse.blade.php" method="get">
                        <input type="text" name="searchContent" value="Search by name, tag, etc.">
                        <input type="submit" name="submit" value="Search">
                    </form>
                </div>
                <div id="bar"></div>

            </div> {{-- end navigation  --}}

            @yield('content')

            <div id="footer">@ WildForce 2017. All rights reserved</div>

        </div>
    </body>

<script>
    // This script will keep the footer always at the bottom of the page
        $(document).ready(function () {
            var docHeight = $(window).height();
            var footerHeight = $('#footer').height();
            var footerTop = $('#footer').position().top + footerHeight;

            if (footerTop < docHeight) {
                $('#footer').css('margin-top', 10+ (docHeight - footerTop) + 'px');
            }
        });
</script>
</html>


