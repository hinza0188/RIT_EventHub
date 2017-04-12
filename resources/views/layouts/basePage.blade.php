<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles --> <!-- now all css is in project/public/css/basepage.css -->
        <link rel="stylesheet" href="{{ URL::asset('css/basepage.css') }}">
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


