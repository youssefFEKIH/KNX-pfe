@extends('Front.layout')

@section('content')



   <!--Cours en ligne-->
   <section id="courses" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="header-section text-center">
          <h2>Cours En Ligne</h2>
          <p>Les cours en ligne disponible dans la plateforme.</p>
          <hr class="bottom-line">
        </div>
      </div>
    </div>
            
            @foreach($Cours as $cours)
           
 
    <div class="col-md-4 col-sm-6 padleft-right">
          <figure class="imghvr-fold-up">
            <img src="{{ asset ('images/' . $cours->url_image)}}" height="300px" width="380px">
            <figcaption>
              <h3>{{$cours->nom}}</h3>
              <p>{{$cours->description}}</p>
            </figcaption>
            <a href="{{route('enlignecours',$cours->id)}}"></a>
          </figure>
        </div>
        
     
          
          @endforeach
          <a href=> <button name="submit" type="submit" class="btn btn-block btn-submit">
           <i class="fa fa-arrow-right"></i></button> </a>
        </div>
      </div>
    </div>
  </section>


@endsection
