
@extends('layouts.app')

<!-- <Jay>: Not within my scope -->
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(Auth::check())
            <div class="card card-primary">
                <br>Great, you are logged in :)
            </div>
            @else
            <div class="card card-danger">
                <br>Bad :( you shouldn't be able to see this
            </div>
            @endif
        </div>
        <div class="col-md-8 col-md-offset-2">
            <h1> dashboard </h1>
            <a href="browse"> browse events</a>
            <a href="create"> create event </a>
            <a href="account"> account </a>
        </div>
    </div>
</div>
@endsection
