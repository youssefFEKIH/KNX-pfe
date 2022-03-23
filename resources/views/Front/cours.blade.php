<!DOCTYPE html>
<html lang="Fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mirage Group "KNX Training"</title>


  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//style.css">
  <link rel="shortcut icon" href="{{ asset('Front/img')}}/course01.jpg" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//style.css">

</head>

<body>
  <!--Navigation bar-->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}">KNX<span> Training</span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('home') }}/#featureX">Mirage Group</a></li>
          <li><a href="{{ route('home') }}/#courses">Cours</a></li>
          <li><a href="{{ route('home') }}/#faculity-member">Projet de Fin d'Études</a></li>
          <li><a href="{{ route('home') }}/#contact">Contact</a></li>
          <li><a href="/#" data-target="#login" data-toggle="modal">Connexion</a></li>
          <li class="btn-trial"><a href="/#" data-target="#inscrire" data-toggle="modal">S'inscrire</a></li>
         </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <!--Modal box-->
  <div class="modal fade" id="login" role="dialog">
    <div class="modal-dialog modal-sm">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Connexion</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>
            <div class="form-group">
              <form name="" id="loginForm">
                <div class="form-group has-feedback">
                  <!----- username -------------->
                  <input class="form-control" placeholder="Nom d'utilisateur" id="loginid" type="text" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" placeholder="mot de passe" id="loginpsw" type="password" autocomplete="off" />
                  <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                  <!---Alredy exists  ! -->
                  <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">Connexion</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!--/ Modal box-->
    <!--Modal box-->
    <div class="modal fade" id="inscrire" role="dialog">
      <div class="modal-dialog modal-sm">

        <!-- Modal content no 1-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">S'inscrire</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">Enregistrer un nouveau compte</p>
              <div class="form-group">
                <form name="" id="loginForm">
                  <div class="form-group has-feedback">
                    <!----- username -------------->
                    <input class="form-control" placeholder="Nom d'utilisateur" id="loginid" type="text" autocomplete="off" />
                    <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                    <!---Alredy exists  ! -->
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <!----- Email -------------->
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validation">
                    </div>
                    <span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
                    <!---Alredy exists  ! -->
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <!----- password -------------->
                    <input class="form-control" placeholder="mot de passe" id="loginpsw" type="password" autocomplete="off" />
                    <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                    <!---Alredy exists  ! -->
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                    <!----- Repat password -------------->
                    <input class="form-control" placeholder="Repeter votre mot de passe" id="loginpsw" type="password" autocomplete="off" />
                    <span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
                    <!---Alredy exists  ! -->
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                  </div>

                    <div class="col-xs-12">
                      <button type="button" class="btn btn-green btn-block btn-flat" onclick="userlogin()">S'inscrire</button>
                    </div>
                    <p class="link-bottom"> Êtes vous membre?  <a href="#" data-target="#login" data-dismiss="modal" data-toggle="modal">Connexion</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->

    <!--Cours-->
   <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Cours</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="{{ asset('Front/img')}}/course01.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="{{ asset('Front/img')}}/course01.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="{{ asset('Front/img')}}/course01.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="{{ asset('Front/img')}}/course01.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="{{ asset('Front/img')}}/course01.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
        <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="{{ asset('Front/img')}}/course01.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
  <!--un cours-->
  <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="{{ asset('Front/img')}}/course01.jpg" class="img-responsive">
            <figcaption>
              <h3>Course Name</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
            </figcaption>
            <a href="#"></a>
          </figure>
        </div>
   <!--fin d'un cours-->     

      </div>
    </div>
  </section>
  <!--/ Cours-->

















<!--Footer-->
<footer id="footer" class="footer">
    <div class="container text-center">
    <h3>Centre de formation accrédité par KNX Association pour l’organisation des formations KNX </h3>
      <a href="https://www.google.com/maps/place/Rue+de+Rakkada,+Sfax/@34.7445164,10.7602546,19z/data=!4m13!1m7!3m6!1s0x1301d2d0b8847da9:0xa97f427d4ee77845!2sCit%C3%A9+Jardin,+Sfax!3b1!8m2!3d34.7488433!4d10.7626385!3m4!1s0x1301d2d135b34641:0x9564a3e57a2e79f4!8m2!3d34.7444391!4d10.76059" target="_blanc"><p>Rue de Rakkada,Cité Zitouna Imm65 App4 , Sfax, Tunisia</p></a> 
      <a href="https://www.google.com/maps/place/Rue+de+Rakkada,+Sfax/@34.7445164,10.7602546,19z/data=!4m13!1m7!3m6!1s0x1301d2d0b8847da9:0xa97f427d4ee77845!2sCit%C3%A9+Jardin,+Sfax!3b1!8m2!3d34.7488433!4d10.7626385!3m4!1s0x1301d2d135b34641:0x9564a3e57a2e79f4!8m2!3d34.7444391!4d10.76059" target="_blanc" ><img src="{{ asset('Front/img')}}/map.png" class="map"></img></a>
      
      <!-- End newsletter-form -->
      <ul class="social-links">
        <li><a href="#link"><img src="{{ asset('Front/img')}}/link.png" class="fa fa-linkedin fa-fw"></img></a></li>
        <li><a href="#link"><img src="{{ asset('Front/img')}}/insta.png" class="fa fa-facebook fa-fw"></img></a></li>
        <li><a href="https://www.facebook.com/miragegroupknxtraining"><img src="{{ asset('Front/img')}}/FB.png" class="fa fa-twitter fa-fw"></img></a></li>
        <li><a href="#link"><img src="{{ asset('Front/img')}}/ph.png" class="fa fa-linkedin fa-fw"></img></a></li>
      </ul>
      
      ©{{date("Y")}} Mirage Group. All rights reserved
      
    </div>
  </footer>
  <!--/ Footer-->

  <script src="{{ asset('Front/js')}}/jquery.min.js"></script>
  <script src="{{ asset('Front/js')}}/jquery.easing.min.js"></script>
  <script src="{{ asset('Front/js')}}/bootstrap.min.js"></script>
  <script src="{{ asset('Front/js')}}/custom.js"></script>
  <script src="{{ asset('Front/contactform')}}/contactform.js"></script>

</body>

</html>


