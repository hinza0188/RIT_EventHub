@extends('layouts.base_page')

@section('content')
    <div class="container" style="margin-top: 168.88px">
        <h2>Register Date of Birth</h2>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(array('route' => 'account_dob.store','method'=>'POST')) !!}
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date: </strong>
                    {!! Form::date('date', \Carbon\Carbon::now()) !!}
                </div>
            </div>

            <input style="display:none" name="user_id" value="{{Auth::id()}}">

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>
        {!! Form::close() !!}
    </div>
@endsection