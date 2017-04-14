@extends('layouts.base_page')

@section('content')
    <div class="row" style="margin-top:168.88px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Phone Number</h2>
            </div>
        </div>
    </div>

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

    {!! Form::open(array('route' => 'account_phone.store','method'=>'POST')) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name: </strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Number: </strong>
                {!! Form::text('number', null, array('placeholder' => '(xxx)-xxx-xxxx','class' => 'form-control')) !!}
            </div>
        </div>

        <input style="display:none" name="user_id" value="{{Auth::id()}}">

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>
    {!! Form::close() !!}
@endsection