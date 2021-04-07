@extends('app')

@section('content')
<div class="personal-information container" id="personal-information">
        <h1 class="text-center"><span>{{ __('Personal Information')}}</span></h1>

        <h4 class="text-center">{{ __('No bad habits, Responsible, Active, Stress-resistant, Sociable, Hardworking, Self-organized, Attentive')}}</h4>
        
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="hobbies">
                        <ul>
                            <li>
                                <i class="fa fa-microphone"></i>
                                <p>{{ __('SINGING')}}</p>
                            </li>
                            <li>
                                <i class="fa fa-book"></i>
                                <p>{{ __('READING')}}</p>
                            </li>
                            <li>
                                <i class="fa fa-film"></i>
                                <p>{{ __('FILM')}}</p>
                            </li>
                            <li>
                                <i class="fa fa-music"></i>
                                <p>{{ __('MUSIC')}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6" id="information">
                <h4>{{ __('Citizenship:')}} <strong>{{ __('Kazakhstan')}}</strong></h4>
                <h4>{{ __('Place of residence:')}} <strong>{{ __('Aktobe')}}</strong></h4>
                <h4>{{ __('Birth date:')}} <strong>05.02.2002 (19 {{ __('years old')}})</strong></h4>
                <h4>{{ __('Gender:')}} <strong>{{ __('Male')}}</strong></h4>
                <h4>{{ __('Marital status:')}} <strong>{{ __('Single')}}</strong></h4>
            </div>
        </div>
    </div>
    
@endsection   