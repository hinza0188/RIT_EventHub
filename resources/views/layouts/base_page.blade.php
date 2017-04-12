@extends('layouts.all_base')
@section('base_css')
    {{--Styles : now the css is in project/public/css/basepage.css --}}
    <link rel="stylesheet" href="{{ URL::asset('css/basepage.css') }}">
    @yield('css')
@endsection

@section('body')
<body id="body">
    <div class="content">

        {{-- Begin navigation  --}}
        <div class="navigation">

            <div class="container">
                <header id="header">
                    <div id="header-inner">
                        <div id="logo">
                            <h1><a href="/">RIT EventHub</a></h1>
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
                                    Welcome,<a href="/account">UserName</a>
                                </li>

                            </ul>
                        </div>
                        <div class="clr"></div>
                    </div>
                </header>
            </div>

            <div class="topNav" id="mainNav">
                <a href="/home" type="button">Home</a>
                <a href="/events" type="button">Browse</a>
                <a href="/create" type="button">Create</a>
                <a href="/account" type="button">Account</a>
                <form class="searchBar" action="/browse" method="get">
                    <input type="text" name="searchContent" value="Search by name, tag, etc.">
                    <input type="submit" name="submit" value="Search">
                </form>
            </div>
            <div id="bar"></div>

        </div>
        {{-- end navigation  --}}

        @yield('content')
    </div>
</body>
@endsection

@section('base_js')
    {{-- Scripts : now all the script is in project/public/js/footer.js --}}
    <script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
    @yield('js')
    <script src="{{ asset('js/footer.js') }}"></script>
@endsection