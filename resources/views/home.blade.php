@extends('layouts.app')

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
    </div>
</div>
@endsection
