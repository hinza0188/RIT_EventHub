@extends('base.blade.php')

@section('content')
    <!--
    This is currently not used, because base url redirects to the login page
    If we agree with a page before login, this will be used later
    -->
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                @if(Auth::check())
                <div class="card card-success">
                    <div class="card-header">Great</div>
                        <div class="card">
                            <br>Good :)
                        </div>
                @else
                <div class="card card-danger">
                    <div class="card-header">You should not be able to see this</div>
                        <div class="card">
                            <br>Bad :(
                        </div>
                @endif
                </div>
            </div>
        </div>
    </div>
@endsection