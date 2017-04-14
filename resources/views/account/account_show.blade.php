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
                        Date of birth: @if($dob){{$dob}} @else N/A @endif
                    </div>
                    @if(sizeof($phones) > 0)
                        @foreach($phones as $phone)
                        <div>
                            Phone Number {{$loop->iteration}}: {{$phone->number}}
                        </div>
                        @endforeach
                    @else
                        <div>
                            Phone Number: N/A
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection