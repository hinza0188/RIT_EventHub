@extends('layouts.base')
@section('basePage_css')
    <!-- Styles --> <!-- now the css is in project/public/css/basepage.css -->
    <link rel="stylesheet" href="{{ URL::asset('css/basepage.css') }}">
    @yield('css')
@endsection
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
                    <a href="/events" type="button">Browse</a>
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

<!-- Scripts --> <!-- now all the script is in project/public/js/footer.js -->
<script src="{{ asset('js/footer.js') }}"></script>
</html>


