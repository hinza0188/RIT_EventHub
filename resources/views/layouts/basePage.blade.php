@extends('layouts.base')

<!-- Styles -->
@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/basePage.css') }}">
@endsection

@section('body')


    <div class="navbar navbar-invsere bg-inverse">
        <div id="logo" class="container-fluid navbar-text">
            <h1 class="float-left">
                <a href="/">RIT EventHub</a>
            </h1>
            <div class="float-right">
                Welcome, <a href="/account" style="color:#ef8d22">UserName</a>&nbsp;&nbsp;&nbsp;
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();"
                   style="color:whitesmoke"
                >
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
    <!-- Top Nav Bar -->
    <nav id="topbar" class="navbar navbar-toggleable-md navbar-light bg-faded">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <div class="col-lg-12">

                <ul class="navbar-nav float-left">
                    <!-- Home Button -->
                    <li class="btn btn-nav-active nav-item">
                        <a class="btn nav-link" href="/" style="color:whitesmoke">Home</a>
                    </li>
                    <!-- Browse Button -->
                    <li class="btn btn-nav nav-item">
                        <a class="btn nav-link" href="/browse"  style="color:whitesmoke">Browse Event</a>
                    </li>
                    <!-- Create Button -->
                    <li class="btn btn-nav nav-item">
                        <a class="nav-link" href="/create"  style="color:whitesmoke">Create Event</a>
                    </li>
                    <!-- Account Button -->
                    <li class="btn btn-nav nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:whitesmoke">
                            Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Reset Password</a>
                            <a class="dropdown-item" href="#">View Detail</a>
                        </div>
                    </li>
                </ul>
                <!-- Search Bar -->
                <form class="form-inline my-2 float-right">
                    <input class="form-control mr-lg-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>

            </div>

        </div>
    </nav>
    <div class="container-fluid" style="background-color:#ef8d22; height:10px;"></div>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <span class="text-muted">@ WildForce 2017. All rights reserved</span>
        </div>
    </footer>

    @endsection
