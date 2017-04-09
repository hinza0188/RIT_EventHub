@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
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
