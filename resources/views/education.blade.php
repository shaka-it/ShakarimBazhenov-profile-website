@extends('app')

@section('content')
<div class="education container" id="education">
        <h1 class="text-center"><span>{{ __('Education')}}</span></h1>
        
        <div class="row">
            <div class="col-md-6" id="information">
                <h4>{{ __('Educational institution:')}} <strong>{{ __('Suleyman Demirel University')}}</strong></h4>
                <h4>{{ __('Year of graduation:')}} <strong>2023</strong></h4>
                <h4>{{ __('Faculty:')}} <strong>{{ __('Engineering Faculty')}}</strong></h4>
                <h4>{{ __('Specialty:')}} <strong>{{ __('Information Systems')}}</strong></h4>
                <h4>{{ __('Form of education:')}} <strong>{{ __('Intramural')}}</strong></h4>
            </div>

            <div class="col-md-6 text-center">
                <div class="container">
                    <div class="skills">
                        <ul>
                            <li>
                                <i class="fab fa-html5"></i>
                                <p>HTML</p>
                            </li>
                            <li>
                                <i class="fab fa-css3-alt"></i>
                                <p>CSS</p>
                            </li>
                            <li>
                                <i class="fab fa-js"></i>
                                <p>JAVASCRIPT</p>
                            </li>
                            <li>
                                <i class="fab fa-java"></i>
                                <p>JAVA</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
        
    
    