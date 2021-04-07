<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab3</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
    <div class="nav-bar">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{ route('aboutMe', app()->getLocale())}}"><p>{{ __('Shakarim')}}</p></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('aboutMe', app()->getLocale())}}" id = "nav_about">{{ __('ABOUT ME')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('personalInformation', app()->getLocale())}}" id = "nav_personal">{{ __('PERSONAL INFORMATION')}}</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('education', app()->getLocale())}}" id = "nav_education">{{ __('EDUCATION')}}</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{ route(Route::currentRouteName(), 'en')}}">EN</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route(Route::currentRouteName(), 'ru')}}">RU</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route(Route::currentRouteName(), 'kz')}}">KZ</a>
                  </li>
              </ul>

              
            </div>
            
          </nav>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
            
    <div class="contact" id="contact">
        <div class="container text-center">
            <h1>{{ __('Contact Me')}}</h1>
            <p>{{ __('You can contact me with this information')}}</p>
            <div class="row">
                <div class="col-md-3">
                    <i class="fa fa-phone"></i>
                    <p>+7 (777) 777-77-77</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-envelope"></i>
                    <p>190103476@stu.sdu.edu.kz</p>
                </div>
                <div class="col-md-3">
                    <i class="fab fa-instagram"></i>
                    <p>@shakarim_bazhenov</p>
                </div>
                <div class="col-md-3">
                    <i class="fab fa-whatsapp"></i>
                    <p>+7 (777) 777-77-77</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>