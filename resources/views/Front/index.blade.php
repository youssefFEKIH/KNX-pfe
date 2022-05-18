

@extends('Front.layout')

@section('content')


  <!--Banner-->
  <div class="banner">
    <div class="bg-color">
      <div class="container">
        <div class="row">
          <div class="banner-text text-center">
            <div class="text-border">
              <h2 class="text-dec">CONFIANCE & QUALITÉ</h2>
            </div>
            <div class="intro-para text-center quote">
              <p class="big-text">Apprendre aujourd'hui. . . Diriger demain.</p>
              <p class="small-text">Centre de formation accrédité par KNX Association pour l’organisation <br> des formations KNX .</p>
              <a href="#" class="btn get-quote" data-target="#inscrire" data-toggle="modal">S 'INCRIRE</a>
            </div>
            <a href="#featureX" class="mouse-hover">
              <div class="mouse"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Banner-->
  <!--Mirage Group-->
  <section id="featureX" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Mirage Group</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
        <div class="feature-info">
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Latest Technologies</h4>
                <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-css3"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Toons Background</h4>
                <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-drupal"></i>
              </div>
            </div>
          </div>
          <div class="fea">
            <div class="col-md-4">
              <div class="heading pull-right">
                <h4>Award Winning Design</h4>
                <p>Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
              </div>
              <div class="fea-img pull-left">
                <i class="fa fa-trophy"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Mirage Group-->
    <!--/ Faculity member-->
  <!--Testimonial-->
  <section id="testimonial" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2 class="white">See What Our Customer Are Saying?</h2>
          <p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line bg-white">
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
            <p class="text-name">Abraham Doe - Creative Dırector</p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="text-comment">
            <p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
            <p class="text-name">Abraham Doe - Creative Director</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Testimonial-->

   <!--Cours en ligne-->
   <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Cours En Ligne</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>

       
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
            @php($count=0)
            @foreach($Cours as $cours)
            @if($cours->type == 'En Ligne')
            @if($count < 3)
            @php($count++)
          <figure class="imghvr-fold-up">
            <img src="{{ asset ('images/' . $cours->url_image)}}" class="img-responsive" width="300px">
            <figcaption>
              <h3>{{$cours->nom}}</h3>
              <p>{{$cours->description}}</p>
            </figcaption>
            <a href="#"></a>
          </figure>
          @endif
          @endif
          @endforeach
          <a href="{{route('cours')}}"> <button name="submit" type="submit" class="btn btn-block btn-submit">
            Consulter touts les cours  <i class="fa fa-arrow-right"></i></button> </a>
        </div>
      </div>
    </div>
  </section>
  

  <!--/ Cours en ligne-->
  
  <!--Cours Presentiel-->
  <section id="coursesP" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Cours Présentiel</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>

 
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
@php($count=0)
  @foreach($Cours as $cours)
  @if($cours->type == 'Presentiel')
  @if($count < 3)
  @php($count++)
          <figure class="imghvr-fold-up">
            <img src="{{ asset ('images/' . $cours->url_image)}}" class="img-responsive" width="300px">
            <figcaption>
              <h3>{{$cours->nom}}</h3>
              <p>{{$cours->description}}</p>
            </figcaption>
            <a href="#"></a>
          </figure>
          @endif
          @endif
          @endforeach
          <a href="{{route('cours')}}"> <button name="submit" type="submit" class="btn btn-block btn-submit">
            Consulter touts les cours  <i class="fa fa-arrow-right"></i></button> </a>
        </div>
      </div>
    </div>
  </section>
 

  <!--/ Cours Presentiel-->
  <!--Organisations-->
  <section id="organisations" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>65%</h3>
              <p>Say NO!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>20%</h3>
              <p>Says Yes!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="orga-stru">
              <h3>15%</h3>
              <p>Can't Say!!</p>
              <i class="fa fa-male"></i>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-info">
            <hgroup>
              <h3 class="det-txt"> Is inclusive quality education affordable?</h3>
              <h4 class="sm-txt">(Revised and Updated for 2016)</h4>
            </hgroup>
            <p class="det-p">Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Organisations-->
  <!--work-shop-->
  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Upcoming Workshop</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-html5 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor HTML5 Workshop</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-css3 color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor CSS3 Workshop</h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6">
          <div class="service-box text-center">
            <div class="icon-box">
              <i class="fa fa-joomla color-green"></i>
            </div>
            <div class="icon-text">
              <h4 class="ser-text">Mentor Joomla Workshop</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ work-shop-->
  <!--projet f'in d'étude-->
  <section id="faculity-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Projet de Fin d'Études</h2>
          <p>Les projet de fin d'études proposée par  mirage Group</p>
          <hr class="bottom-line">
        </div>.
        @php($count=0)
        @foreach($projet as $projets)
        @if($count < 3)
        @php($count++)
        <!--un projet-->
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
            <img src="{{ asset ('images/' . $projets->url_image)}}"class="pm-staff-profile-image"  alt="PFE" class="img-thumbnail img-circle" />
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">{{$projets->titre}}</p>
              <p class="pm-staff-profile-bio">{{$projets->description}} </p>
            </div>
          </div>
        </div>
        @endif
        @endforeach
        <!--fin d'un projet-->
              <a href="{{route('projets')}}"> <button name="submit" type="submit" class="btn btn-block btn-submit">
                Consulter touts les projets  <i class="fa fa-arrow-right"></i></button> </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

<!--Postuler-->
<section id="postuler" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Postuler Maintenant</h2>
          <p>Bienvenue sur les emplois de Mirage Group
          <br/>Nous transmettrons votre cv aux employeurs intéressés</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>

    <div class="container">

    <form action="/AdminDashboard/Candidat" method="POST" enctype="multipart/form-data"  id="loginForm">
        @csrf
        <div class="col-md-6 col-sm-6 col-xs-12 left">

            <div class="form-group">
              <input type="text" name="nom" class="form-control form" id="name" placeholder="Nom" required />

            </div>

            <div class="form-group">
              <input type="text" name="pays" class="form-control form" id="pays" placeholder="Pays"  required />

            </div>

            <div class="form-group">
              <input type="email" class="form-control" name="mail" id="email" placeholder="Email"  required/>

            </div>

            <div class="form-group">
              <input type="tel" class="form-control" name="numero" id="tel" placeholder="numéro télephone"   required/>

            </div>


          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 right">
              <br> <br>
                <div class="form-group">
                  <label style=color:black;>Ajouter votre CV </label>
                  <input type="file" class="form-control" name="cv" id="cv" accept = "application/pdf"  required/>

                </div>
          </div>
    </tr>

          <div class="col-xs-12">
            <!-- Button -->

            <button type="submit" id="submit"  class="form contact-form-button light-form-button oswald light">Postuler</button>
          </div>
        </form>

          </div>

    </div>
        </div>
      </form>
    </div>

  </section>

  <!--/ Postuler-->

  <!--Contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Nous contacter</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
        <div id="sendmessage">Your message has been sent. Thank you!</div>
        <div id="errormessage"></div>
        <form action="" method="post" role="form" class="contactForm">
          <div class="col-md-6 col-sm-6 col-xs-12 left">
            <div class="form-group">
              <input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-xs-12 right">
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
          </div>

          <div class="col-xs-12">
            <!-- Button -->
            <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
          </div>
        </form>

      </div>
    </div>
  </section>
  <!--/ Contact-->

  @endsection




