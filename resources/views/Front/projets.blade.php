
@extends('Front.layout')

@section('content')
 
    <!--projet f'in d'étude-->
  <section id="faculity-member" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Projet de Fin d'Études</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
          <hr class="bottom-line">
        </div>
        @foreach($projet as $projets)
        <!--un projet-->
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="pm-staff-profile-container">
            <div class="pm-staff-profile-image-wrapper text-center">
              <div class="pm-staff-profile-image">
                <img src="{{ asset ('images/' . $projets->url_image)}}"class="pm-staff-profile-image"  alt="PFE" class="img-thumbnail img-circle" />
              </div>
            </div>
            <div class="pm-staff-profile-details text-center">
              <p class="pm-staff-profile-name">{{$projets->titre}}</p>
            

              <p class="readMore">{{$projets->description}} </p>
            </div>
          </div>
        </div>
        @endforeach
        <!--fin d'un projet-->
      </div>
    </div>
    

  </section>
 @endsection




















 