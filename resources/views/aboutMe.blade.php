@extends('app')

@section('content')
<div class="about container" id="about">
        <h1 class="text-center"><span class="title">{{ __('About Me')}}</span></h1>

        <div class="row">
            <div class="col-md-6 text-center">
                <img src="{{asset('me.png')}}" class="profile-img">
            </div>
            <div class="col-md-6" id="information">
                <h2><strong>{{ __('Bazhenov Shakarim Samatovich')}}</strong></h2>
                <h3><strong>{{ __('Developer-programmer')}}</strong></h3>
                <h4>{{ __('Employment:')}} <strong>{{ __('Full')}}</strong></h4>
                <h4>{{ __('Schedule:')}} <strong>{{ __('Full day')}}</strong></h4>
                <h4>{{ __('Willingness to travel:')}} <strong>{{ __('Yes')}}</strong></h4>
                <h4>{{ __('Desired salary:')}} <strong>{{ __('500$')}}</strong></h4>
            </div>
        </div>
    </div>
    
@endsection
    