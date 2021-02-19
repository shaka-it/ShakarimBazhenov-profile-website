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
            
        <div class="education container" id="education">
        <h1 class="text-center"><span>Education</span></h1>
        
        <div class="row">
            <div class="col-md-6" id="information">
                <h4>Educational institution: <strong>Suleyman Demirel University</strong></h4>
                <h4>Year of graduation: <strong>2023</strong></h4>
                <h4>Faculty: <strong>Engineering Faculty</strong></h4>
                <h4>Specialty: <strong>Information Systems</strong></h4>
                <h4>Form of education: <strong>Intramural</strong></h4>
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
        var personal = document.getElementById('nav_personal');
        personal.addEventListener('click',function(){
            document.location.href = "/personalInformation";
        });
    </script>
</body>
</html>