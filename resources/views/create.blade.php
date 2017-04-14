@extends('layouts.base_page')

@section('content')

    <div style="margin-top: 175px;">
        <form method="POST" action="/create" enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Event Name: </label>
                <input type="text" class="form-control" id="title" placeholder="Event Name" name="title">
            </div>


            <div class="form-group">
                <label for="description">Description: </label>
                <textarea id="description" name="description" placeholder="Description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="location">Location: </label>
                <input type="text" class="form-control" id="location" placeholder="Location" name="location">
            </div>

            <div class="form-group">
                <label for="imgURL">Event Image</label>
                <input type="file" id="imgURL" name="imgURL">
            </div>


            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>




    <script src="{{asset('js/jquery-3.2.0.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/parallax/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slideshow/slideshow.css')}}" type="text/css">
    <script src="{{asset('js/slideshow.js')}}"></script>
    <script src="{{asset('js/scroll.js')}}"></script>

    <script>
        // load parallax javascript
        loadParallaxEffect();
    </script>
@endsection