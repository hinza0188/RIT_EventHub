@extends('layouts.base_page')

@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
@endsection

@section('content')
    <div class="container" style="margin-top: 168.88px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="container">
                    <div>
                        RIT E-mail: {{Auth::user()->email}}
                    </div>
                    <div>
                        First Name: {{Auth::user()->first_name}}
                    </div>
                    <div>
                        Last Name: {{Auth::user()->last_name}}
                    </div>
                    <div>
                        Date of birth: @if($dob){{$dob[0]->date}} <a class="btn btn-success btn-md" href="/account_dob/{{$dob[0]->id}}/edit">Edit</a>@else <a href="/account_dob/create" class="btn btn-primary btn-md">Register Date of Birth</a> @endif
                    </div>
                    @if(sizeof($phones) > 0)
                        @foreach($phones as $phone)
                        <div>
                            Phone Number [ {{$phone->name}} ]: {{$phone->number}} <a class="btn btn-success btn-md" href="/account_phone/{{$phone->id}}/edit">Edit</a>
                        </div>
                        @endforeach
                    @else
                        <div>
                            Phone Number: <a href="/account_phone/create" class="btn btn-primary btn-md">Register phone number</a>
                        </div>
                    @endif
                </div>
                <div class="container">
                    <div class="btn-group">
                        <a class="btn btn-warning btn-md" href="/account">Reset Password</a>
                        <a class="btn btn-success btn-md" href="/account/{{Auth::user()->id}}/edit">Edit Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection