<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CV Formateur</title>
        <link rel="icon" type="image/x-icon" href="Front3/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="Front3/css/styles.css" rel="stylesheet" />
    </head>
    @foreach($cv as $cvs)
    <body id="page-top">
        <!-- Navigation-->

        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav" >
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                
            <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ asset ('images/' . $cvs->image)}}" alt="..." />
         
            </a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Interests</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                    {{$cvs->nom}}
                        <span class="text-primary">{{$cvs->prenom}}</span>
                    </h1>
                    <div class="subheading mb-5">
                    {{$cvs->adresse}}
                        <a href="mailto:name@email.com"> {{$cvs->mail}}</a>
                    </div>
                    <p class="lead mb-5"> {{$cvs->description}}</p>
                    <div class="social-icons">
                        <a class="social-icon" href="{{$cvs->fb}}"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="{{$cvs->linkedin}}"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            @endforeach
            @foreach($exp as $exps)
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{$exps->titre_experience}}</h3>
                            <div class="subheading mb-3">{{$exps->lieu_experience}}</div>
                            <p>{{$exps->desc_experience}}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{$exps->date_experience}}</span></div>
                    </div>

                </div>
            </section>
            @endforeach
            
            @foreach($edu as $edus)
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>

                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{$edus->titre_education}}</h3>
                            <div class="subheading mb-3">{{$edus->lieu_education}}</div>
                            <p>{{$edus->desc_education}}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{$edus->date_education}}</span></div>
                    </div>
                </div>
            </section>
            @endforeach
            @foreach($cv as $cvs)
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">{{$cvs->competence}}</div>
                    
                    
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Interests</h2>
                    <p>{{$cvs->interet}}</p>
                </div>
            </section>
            @endforeach
            @foreach($crt as $crts)
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            {{$crts->certif}}
                        </li>
                        
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="Front3/js/scripts.js"></script>
    </body>
    @endforeach
</html>
