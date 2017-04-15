@extends('layouts.base_page')

@section('content')

    <link rel="stylesheet" href="{{ URL::asset('css/account.css') }}">
    <div class="spacer"></div>
    <div id="account_container">
        <h1>Account Info:</h1>
        <hr>
        <br>
        <div class="container">

            <div>
                <span><b>RIT E-mail:</b> {{Auth::user()->email}}</span>
            </div>
            <div>
                <span><b>First Name:</b> {{Auth::user()->first_name}}</span>
            </div>
            <div>
                <span><b>Last Name:</b> {{Auth::user()->last_name}}</span>
            </div>
            <div>
                Date of birth:
                @if(sizeof($dob)>0)
                    {{$dob[0]->date}} <a href="/account_dob/{{$dob[0]->id}}/edit"><i class="fa fa-3x fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>
                @else
                    <a href="/account_dob/create"><i class="fa fa-fw fa-plus-circle" aria-hidden="true"></i></a>
                @endif
            </div>
            @if(sizeof($phones) > 0)
                @foreach($phones as $phone)
                {!! Form::open([ 'method'  => 'delete', 'route' => [ 'account_phone.destroy', $phone->id ] ]) !!}
                    <div>
                        <span class="phone-number">Phone Number [ {{$phone->name}} ]: {{$phone->number}}</span>
                        <a href="{{ route( 'account_phone.create' ) }}"><i class="fa fa-3x fa-plus-circle fa-fw" aria-hidden="true"></i></a>
                        <a href="{{ route( 'account_phone.edit', ['$id' =>$phone->id] ) }}"><i class="fa fa-3x fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>
                        {{ Form::submit('Delete', ['class' => 'delete-button']) }}
                    </div>
                {{ Form::close() }}
                @endforeach
            @else
                <div>
                    Phone Number: <a href="account_phone/create"><i class="fa fa-plus-circle fa-fw fa-3x" aria-hidden="true"></i></a>
                </div>
            @endif
        </div>
        <div  id="button-group" >
            <button onclick="window.location='/account'">Reset Password</button>
            <button onclick="window.location='/account/{{Auth::user()->id}}/edit'">Edit Account</button>
        </div>
    </div>
@endsection