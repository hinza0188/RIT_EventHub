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

            footer {
                border-top: solid;
                border-top-color: orange; 
                position: absolute;
                right: 0;
                bottom: 0;
                left: 0;
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
                margin:0 auto; 
                padding:10px; 
                width:970px;
                background: #403f3f;
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
            }
            
            #userNav ul li a { 
                display:block; 
                margin:0; 
                padding:8px 20px; 
                color:orange; 
                text-decoration:none;
            }

            /* Add a black background color to the top navigation */
            .topNav {
                background-color: black;
                overflow: hidden;
                border-bottom: solid;
                border-bottom-width: 7px;
                border-bottom-color: #ef8d22;  
            }

            .topNav a {
                float: left;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }

            /* Change the color of links on hover */
            .topNav a:hover {
                background-color: #ef8d22;
                color: black;
            }

            /* Add a color to the active/current link */
            .topNav a.active {
                background-color: #4CAF50;
                color: #ef8d22;
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

        </style>
    </head>
    <body id="body">
        <div class="content">
        <div class="container">
            <header id="header">
                <div id="header-inner">
                    <div id="logo">
                        <h1><a href="/home.blade.php">RIT EventHub</a></h1>
                    </div>
                    <div id="userNav">
                        <ul>
                        <li>Welcome, <a href="/account.blade.php">Jimmy</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
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

            @yield('content')


            <footer>@ WildForce 2017. All rights reserved</footer>
        </div>


    </body>
</html>
