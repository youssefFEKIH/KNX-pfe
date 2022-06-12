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
<section id="faculity-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Bienvenu Au KNX UserClub Tunisia
</h2>

          <hr class="bottom-line">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="{{ asset('Front/img')}}/mirage.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">Mirage Group <br> "KNX Training"</p>
              <p class="pm-staff-profile-bio">Centre de formation accrédité par KNX Association pour l’organisation des formations KNX.</p>
              <a href="{{ route('home') }}"> <button   name="submit" type="submit" class="btn btn-block btn-submit">
            Consulter  <i class="fa fa-arrow-right"></i></button></a>
            </div>
          </div>
        </div>

        <!--un projet-->
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="{{ asset('Front/img')}}/logo knx tunisie.png" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">KNX UserClub  <br> Tunisia </p>
              <p class="pm-staff-profile-bio">KNX : le standard mondial pour la gestion technique des bâtiments résidentiels et tertiaires.</p>
              <a href="{{ route('knxtunisie-acceuil') }}"> <button   name="submit" type="submit" class="btn btn-block btn-submit">
            Consulter  <i class="fa fa-arrow-right"></i></button></a>
            </div>
          </div>
        </div>
        <!--fin d'un projet-->

        <!--un projet-->
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="{{ asset('Front/img')}}/formateur.jpg" alt="" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">KNX Tunisie <br> "Trainers"</p>
              <p class="pm-staff-profile-bio">Les formateurs accrédités <br> KNX en Tunisie <br>et leurs nouveautés</p>
              <a href="{{ route('Formateur') }}"> <button   name="submit" type="submit" class="btn btn-block btn-submit">
            Consulter  <i class="fa fa-arrow-right"></i></button></a>
            </div>
          </div>
        </div>
        <!--fin d'un projet-->

      </div>
    </div>


  </section>


  <script src="{{ asset('Front/js')}}/jquery.min.js"></script>
  <script src="{{ asset('Front/js')}}/jquery.easing.min.js"></script>
  <script src="{{ asset('Front/js')}}/bootstrap.min.js"></script>
  <script src="{{ asset('Front/js')}}/custom.js"></script>
  <script src="{{ asset('Front/contactform')}}/contactform.js"></script>

</body>

</html>
