
<html lang="fr">
    @extends('knxtunisie.layout')
    @section('content')
    <head>

    <!-- titres des pages -->
    <title>KNX Tunisie - Actus</title><!-- Fin Titres des pages -->



    </head>




    <body>
        <!--  div globale di site   -->
        <div id="global" class="mm-page">
            <!--  Site   -->
            <div id="site">
               <!--  Contenu gauche   -->
               @foreach($No as $No)
               @if($No->type == 'Actus')
               <div id="contenu_gauche">
                <p class="fil-ariane"><a href="KNX-France-accueil.html" title="Accueil">&gt; Accueil</a> &gt; Actus</p>
                <h1>Actus</h1>
                <a href="KNX-France-membres.html" title="Membres KNX France" style="text-decoration:none;">
                <div class="accueil-bloc">
                  <img src="{{ asset ('images/' . $No->url_nouveaute)}}" alt="accueil" >
                <h4> {{$No->titre}}</h4>
                <p>{{$No->description}}</p>
                </div></a>

               </div>
               @endif
               @endforeach
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

                   <!-- Réseaux Sociaux -->

                   <!-- Newsletter -->
                   <div id="inscription_newsletter">
                       <h1>S'inscrire à la newsleter</h1>

                       <p>Inscrivez-vous à la e-enewsletter pour recevoir les dernières actualités de KNX France</p>



                       <a href="https://my.sendinblue.com/users/subscribe/js_id/3786j/id/1" title="S'inscrire à la newsletter" style="text-decoration:none;" target="_blank"><div id="bouton_newsletter">Inscription</div></a>


                   </div>
                   <!-- Réseaux Sociaux -->



                   <br><br>








                   <!-- Événements -->
                   <h1>Événements</h1>
                   <!-- Événements -->

               </div>
               <!--  fin Contenu droite   -->

           </body>
           @endsection
           </html>

