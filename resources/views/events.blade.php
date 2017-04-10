@extends('layouts.basePage')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1> browse all events</h1>
                <ul>
                    @foreach ($events as $event)
                        <li> {{ $event }} </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
@endsection
