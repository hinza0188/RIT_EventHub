@extends('layouts.base_page')

@section('content')
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
            Date of birth:
            @if(sizeof($dob)>0)
                {!! Form::open([ 'method'  => 'delete', 'route' => [ 'account_dob.destroy', $dob[0]->id ] ]) !!}
                {{$dob[0]->date}} <a href="{{ route( 'account_dob.edit', ['$id' => $dob[0]->id] ) }}"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>
                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                {!! Form::close() !!}
            @else
                <a href="{{ route('account_dob.create') }}"><i class="fa fa-fw fa-plus-circle" aria-hidden="true"></i></a>
            @endif
        </div>
        @if(sizeof($phones) > 0)
            @foreach($phones as $phone)
            {!! Form::open([ 'method'  => 'delete', 'route' => [ 'account_phone.destroy', $phone->id ] ]) !!}
                <div>
                    Phone Number [ {{$phone->name}} ]: {{$phone->number}}
                    <a href="{{ route( 'account_phone.create' ) }}"><i class="fa fa-plus-circle fa-fw" aria-hidden="true"></i></a>
                    <a href="{{ route( 'account_phone.edit', ['$id' =>$phone->id] ) }}"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i></a>
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'] ) !!}
                </div>
            {!! Form::close() !!}
            @endforeach
        @else
            <div>
                Phone Number: <a href="{{ route( 'account_phone.create') }}"><i class="fa fa-plus-circle fa-fw" aria-hidden="true"></i></a>
            </div>
        @endif
    </div>
    <div class="container">
        <div class="btn-group">
            <a href="/account">Reset Password</a>
            <a href="{{ route( 'account.edit', ['$id' => Auth::id()] ) }}">Edit Account</a>
        </div>
    </div>
@endsection