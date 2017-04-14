@extends('layouts.base_page')

@section('content')
    {{--<div class="container" style="margin-top: 168.88px;">--}}
    <div class="container" style="margin-top: 168.88px;">
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
@endsection