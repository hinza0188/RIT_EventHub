@extends('layouts.base_page')

@section('content')
    <div class="container" style="margin-top: 168.88px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="container">
                    this is account show page
                </div>
                <div class="container">
                    <div>
                        {{Auth::user()->email}}
                    </div>
                    <div>
                        {{Auth::user()->first_name}}
                    </div>
                    <div>
                        {{Auth::user()->last_name}}
                    </div>
                    <div>
                        {{Auth::user()->get_dob() or "Birthday have not been set"}}
                    </div>
                    <div>
                        {{Auth::user()->get_phone_number() or "Phone Number have not been set"}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection