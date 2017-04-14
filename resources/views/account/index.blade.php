@extends('layouts.base_page')

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
                        Date of birth: @if($dob){{$dob[0]->date}} <a class="btn" href="/account_dob/edit/{{$dob[0]->id}}">Edit</a> <a class="btn" href="/account_dob/destroy/{{$dob[0]->id}}">Delete</a>@else <a href="/account_dob/create" class="btn">Register Date of Birth</a> @endif
                    </div>
                    @if(sizeof($phones) > 0)
                        @foreach($phones as $phone)
                        <div>
                            Phone Number [ {{$phone->name}} ]: {{$phone->number}} <a class="btn" href="/account_phone/edit/{{$phone->id}}">Edit</a> <a class="btn" href="/account_phone/destroy/{{$phone->id}}">Delete</a>
                        </div>
                        @endforeach
                    @else
                        <div>
                            Phone Number: <a href="/account_phone/create" class="btn">Register new phone number</a>
                        </div>
                    @endif
                </div>
                <div class="container">
                    <div>
                        <a href="/account">Reset Password</a>
                    </div>
                    <div>
                        <a href="/account/edit">Edit Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection