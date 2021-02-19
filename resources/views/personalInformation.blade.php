<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab3</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
<div class="nav-bar">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="#"><p>Shakarim</p></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#about" id = "nav_about">ABOUT ME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#personal-information" id = "nav_personal">PERSONAL INFORMATION</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="#education" id = "nav_education">EDUCATION</a>
                  </li>
              </ul>
            </div>
          </nav>
        </div>
            
        <div class="personal-information container" id="personal-information">
        <h1 class="text-center"><span>Personal Information</span></h1>

        <h4 class="text-center">No bad habits, Responsible, Active, Stress-resistant, Sociable, Hardworking, Self-organized, Attentive</h4>
        
        <div class="row">
            <div class="col-md-6">
                <div class="container">
                    <div class="hobbies">
                        <ul>
                            <li>
                                <i class="fa fa-microphone"></i>
                                <p>SINGING</p>
                            </li>
                            <li>
                                <i class="fa fa-book"></i>
                                <p>READING</p>
                            </li>
                            <li>
                                <i class="fa fa-film"></i>
                                <p>FILM</p>
                            </li>
                            <li>
                                <i class="fa fa-music"></i>
                                <p>MUSIC</p>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
            <div class="col-md-6" id="information">
                <h4>Citizenship: <strong>Kazakhstan</strong></h4>
                <h4>Place of residence: <strong>Aktobe</strong></h4>
                <h4>Birth date: <strong>05.02.2002 (18 years old)</strong></h4>
                <h4>Gender: <strong>Male</strong></h4>
                <h4>Marital status: <strong>Single</strong></h4>
            </div>
        </div>
    </div>
    
    <div class="contact" id="contact">
        <div class="container text-center">
            <h1>Contact Me</h1>
            <p>You can contact me with this information</p>
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

    <script>
        var about = document.getElementById('nav_about');
        about.addEventListener('click',function(){
            document.location.href = "/aboutMe";
        });
        var education = document.getElementById('nav_education');
        education.addEventListener('click',function(){
            document.location.href = "/education";
        });
    </script>
</body>
</html>