@extends('layouts.base_page')

@section('css')
    <link rel="stylesheet" href="{{asset('css/event_form.css')}}" type="text/css">

@endsection

@section('content')
    <div class="spacer"></div>

    <div class="form" style="margin-top: 200px;">
        <h1>Create Event: </h1>
        <hr>
    </div>

    <div class="form">


        <form method="POST" action="/create" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Event Name</label>
                <input type="text" class="form-control" id="title" placeholder="Event Name" name="title">
            </div>


            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" placeholder="Location" name="location">
            </div>

            <div class="form-group">
                <label for="imgURL">Event Image</label>
                <input type="file" id="imgURL" name="imgURL">
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                {!! Form::date('date', \Carbon\Carbon::now()) !!}
            </div>

            <div id="submit-container">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>


        </form>

    </div>


    <div style="margin-bottom: 100px;"></div>
@endsection