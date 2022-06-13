
<html lang="fr">
    @extends('knxtunisie.layout')
    @section('content')
    <head>

    <!-- titres des pages -->
    <title>KNX Tunisie - Contact</title><!-- Fin Titres des pages -->

    </head>



    <body>
        <!--  div globale di site   -->
        <div id="global" class="mm-page">
            <!--  Site   -->
            <div id="site">
               <!--  Contenu gauche   -->
               
               <div id="contenu_gauche">
                <p class="fil-ariane"><a href="KNX-France-accueil.html" title="Accueil">&gt; Accueil</a> &gt; Contact</p>
                <h1>Contact</h1>
                @foreach($No as $No)
               @if($No->type == 'Contact')
                <div class="accueil-bloc">
                    <img src="{{ asset ('images/' . $No->url_nouveaute)}}" alt="accueil" height="150px" width="200px" >
                    <h4> {{$No->titre}}</h4>
                    <div class="readMore"><div > <p  class="texte_bloc">{{$No->description}}</p></div></div>
                     </div>
                     @endif
                     @endforeach
                    </div>
               <!--  fin Contenu gauche   -->



            </div>
            <!--  fin Site   -->
        </div>
         <!--  fin div globale di site  -->
    </body>

               <!--  Contenu droite   -->
               <div id="contenu_droite">
               <hr id="trait">


                  <!------ Bannière animée --->
                <div style="padding: 40px 0 0 0; ">
                  <p style="text-decoration: underline; color:#000000;">Bienvenu au Mirage Group</p>
                  <a href="{{ route('home') }}" >
                      <img style="border: 3px groove #000000;"  classe="mirage" src="{{ asset('Front/img')}}/mirage.jpg" height="200" width="350" >
                </a><br>
                </div>

                  <!------ Fin bannière animée --->
                   <!-- Réseaux Sociaux -->
                   <h1> Rejoignez-nous</h1>
                   <div id="reseaux_sociaux">
                       <p><a href="" title="Facebook" target="_blank"><img src="Front2/images/facebook.jpg" alt="Facebook"></a>
                         <a href="" title="Twitter" target="_blank"><img src="Front2/images/twitter.jpg" alt="Twitter"></a>
                         <a href="" title="LinkedIn" target="_blank"><img src="Front2/images/linkedin.jpg" alt="LinkedIn"></a>
                         <a href="" title="Instagram" target="_blank"><img src="Front2/images/instagram.jpg" alt="Instagram"></a>
                         <a href="" title="YouTube" target="_blank"><img src="Front2/images/youtube.jpg" alt="YouTube"></a> </p> <br></div>


                   <div><br><br>
                 <p> Retrouvez toute l'actualité de KNX Tunisie sur les reseaux sociaux </p>
                   </div>
                     <br>
                     <br>

              
                   </div>
                   <!-- Réseaux Sociaux -->



                   <br><br>


               </div>
               <!--  fin Contenu droite   -->

           </body>
           @endsection
           </html>

