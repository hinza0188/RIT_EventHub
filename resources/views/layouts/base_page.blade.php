@extends('layouts.root')
@section('base_css')
    {{-- now all the css is in project/public/css/ directory --}}
    <link rel="stylesheet" href="{{ URL::asset('css/basepage.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/event.css') }}">
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
                                    Welcome,<a href="/account">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</a>
                                </li>

                            </ul>
                        </div>
                        <div class="clr"></div>
                    </div>
                </header>
            </div>

            <div class="topNav" id="mainNav">
                <a href="{{ route('home.index') }}" type="button">Home</a>
                <a href="{{ route('event.index') }}" type="button">All Events</a>
                <a href="/myEvents" type="button">My Events</a>
                <a href="{{ route('event.create') }}" type="button">Create New</a>
                <a href="{{ route('account.index') }}" type="button">Account</a>

                {!! Form::open(array('method' => 'get', 'route' => 'queries.index', 'class' => 'searchBar')) !!}
                {!! Form::text('search', null,
                                       array('required',
                                            'class'=>'form-control',
                                            'placeholder'=>'Search for an event...')) !!}
                {!! Form::submit('Search',
                                           array('class'=>'btn btn-default')) !!}
                {!! Form::close() !!}
            </div>
            <div id="bar"></div>

        </div>
        {{-- end navigation  --}}

        @yield('content')

        <div id="footer">@ WildForce 2017. All rights reserved</div>
    </div>
</body>
@endsection

@section('base_js')
    {{-- Now all the script is in project/public/js/ directory --}}
    <script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-thumbnail-cut.js') }}"></script>

    <script>
        $('.event').click(function () {

            var event = $(this);
            event.toggleClass('toggled');
        });
    </script>
    @yield('js')
    <script src="{{ asset('js/footer.js') }}"></script>
@endsection