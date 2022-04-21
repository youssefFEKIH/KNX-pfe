<html lang="fr"><head>
    <link rel="icon" type="image/png" href="Front2/images/logo/knx.png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="KNX : le standard mondial pour la gestion technique des bâtiments résidentiels et tertiaires">
    <meta name="keywords" content="domotique, immotique, knx, konnex, EIB, ETS, ETS3, ETS4, gestion du bâtiment, technique, GTB, automatisme, GTC ">

    <!-- titres des pages -->
    <title>KNX Tunisie - KNX</title><!-- Fin Titres des pages -->

    <meta name="viewport" content="width=device-width, user-scalable=no">
    <link href="Front2/style/style.css" rel="stylesheet" type="text/css">

    <!-- Gallerie Photos Newsletters -->
    <link href="Front2/style/gallerie.css" rel="stylesheet" type="text/css">
    <!-- Fin Gallerie Photos Newsletters -->

    <!-- Slideshows -->
    <link rel="stylesheet" href="Front2/style/flexslider.css" type="text/css" media="screen">
    <!-- Slideshows -->

    <!-- Menu -->
    <link type="text/css" rel="stylesheet" href="Front2/style/jquery.mmenu.css">
    <!-- Menu -->

    <!-- Script Menu Mobile + Tablette Type Facebook-->
    <script async="" src="//www.google-analytics.com/analytics.js"></script><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

            <script>
                $(function() {
                    $('nav#menu').mmenu();
                });
            </script>

    <!-- Script Menu Mobile + Tablette Type Facebook-->

     <!-- Script Nouveau Slideshow -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"> </script>

    <script src="Front2/js/jquery.flexslider-min.js"></script>

        <!-- Hook up the FlexSlider -->
        <script>
            $(window).load(function() {
                $('.flexslider').flexslider();
            });
        </script>
    <!-- Fin Script Nouveau Slideshow -->


    <!-- script google analytics -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-18782856-3', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- fin script google analytics -->

    <!-- Script Menu Mobile + Tablette Type Facebook-->
    <script src="Front2/js/jquery.mmenu.min.js"></script>
    <!-- Fin Script Menu Mobile + Tablette Type Facebook -->
    </head>




    <body><nav id="menu" class="mm-menu mm-horizontal mm-ismenu mm-offcanvas"><ul class="mm-list mm-panel mm-opened mm-current" id="mm-0">
                <li><a href="{{ route('knxtunisie-acceuil') }}" title="Accueil">Accueil</a></li>
                <li><a href="{{ route('knx') }}" title="KNX">KNX</a></li>
                <li><a href="{{ route('knxtunisie-logiciel') }}" title="Outils/logiciels">Logiciels</a></li>
                <li><a href="{{ route('knxtunisie-doc') }}" title="Documentation">Documentation</a></li>
                <li><a href="{{ route('knxtunisie-com') }}" title="Communauté">Communauté</a></li>

                <li><a href="{{ route('knxtunisie-formation') }}" title="Formation">Formation</a></li>
                <li><a href="{{ route('knxtunisie-actus') }}" title="News">Actus</a></li>
                <li><a href="KNX-France-e-newsletter.html" title="News">Newsletter</a></li>
                <li><a href="KNX-France-espace-membre.html" title="Espace Membre">Espace Membre</a></li>
                <li><a href="KNX-France-espace-presse.html" title="Espace Presse">Presse</a></li>
                <li><a href="{{ route('knxtunisie-contact') }}" title="Contact">Contact</a></li>
                <li><a href="KNX-France-mentions-legales.html" title="Mentions légales">Mentions Légales</a></li>
            </ul></nav>
    <!-- Script défilement logos membres-->
    <script>//<![CDATA[
            $().ready(function() {
        var slider = $('#slider').bxSlider({
            pager: false,
            controls: true,
            prevText: '',
            prevImage: '/global/abbzh/abbzh259.nsf/bf177942f19f4a98c1257148003b7a0a/2ceb3d93da33dacac1257936001fd23f/$FILE/slider-navi-prev.png',
            nextText: '',
            nextImage: '/global/abbzh/abbzh259.nsf/bf177942f19f4a98c1257148003b7a0a/de0129f865e4e9dcc1257936001fbedb/$FILE/slider-navi-next.png',
            auto: true,
            pause: 5000,
            onBeforeSlide: function(currentSlide) {
                $("#coda-nav-1 a").removeClass("current");
                $("#coda-nav-1 .tab" + (currentSlide + 1) + " a").addClass("current");
            }
        });
        $("#coda-nav-1 a").click(function() {
            var tabNumber = $(this).parent().index();
            slider.goToSlide(tabNumber);
            return false;
        });
        // Add link to left menu heading (unless there is already one)
        if ($(".left-side h4 a").length == 0)
            $(".left-side h4").contents().wrap('<a href="/cawp/abbzh259/db3d0dc8d817f4c3c1257919004a07ba.aspx" style="color: #D2D2D2;" />');
        // Change link in logo
        $("h1.logo a").attr("href", "/");
        // Manipulate stock ticker (change title and comma to dot)
        $(".contentStockTicker h3 a").each(function() {
            var titleText = $(this).html();
            titleText = titleText.replace("Actual", "Current");
            $(this).html(titleText);
        });
        $(".stockTicker .percentage").each(function() {
            var h = $(this).html();
            h = h.replace(",", ".");
            $(this).html(h);
        });
        //
            $("#aaa").mouseover(function() {
                $("#aaa").css("text-decoration","none");
                $("#aaa").css("color","#00AAE4");
            });
            $("#aaa").mouseout(function(){
                $("#aaa").css("color","#93D4EE");
            });
            $("#bbb").mouseover(function() {
                $("#bbb").css("text-decoration","none");
                $("#bbb").css("color","#00AAE4");
            });
            $("#bbb").mouseout(function(){
                $("#bbb").css("color","#93D4EE");
            });
            $("#ccc").mouseover(function() {
                $("#ccc").css("text-decoration","none");
                $("#ccc").css("color","#00AAE4");
            });
            $("#ccc").mouseout(function(){
                $("#ccc").css("color","#93D4EE");
            });
           });

         //]]></script>
    <!-- Fin Script défilement logos membres-->
    <!-- Script défilement logos membres-->
    <script src="Front2/js/jMyCarousel.js"></script>
    <script>//<![CDATA[
            $(function() {
                $(".jMyCarousel").jMyCarousel({
                    visible: '100%'
                });
            });
    //]]></script>
     <!-- Fin Script défilement logos membres-->

    <!--  div globale di site   -->
    <div id="global" class="mm-page">

        <!--  header   -->
        <div id="header">
            <div id="logo">
               <a href="{{ route('knxtunisie-acceuil') }}" title="Accueil">
               <img src="Front2/images/logo/knx-tunisie.png" alt="logo" height="135px">

                </a>

            </div>

            <div id="espace_prive">
               <ul id="prive">

                       <li>
                      <a class="newsletter2" href="KNX-France-devenir-membre.html">
                          Devenir membre
                      </a>
                    </li>

                  <li>
                      <a class="newsletter" href="KNX-France-e-newsletter.html">
                          Newsletter
                      </a>
                    </li>

                    <li>
                       <a class="espace-membre" href="KNX-France-espace-membre.html">
                        Espace Membres
                       </a>
                     </li>

                    <li>
                       <a class="presse" href="KNX-France-espace-presse.html">
                        Presse
                       </a>
                    </li>

                  </ul>
                </div>
        </div>
        <!--  fin header   -->






        <!--  Menu   -->
        <div id="menusite">

            <!-- Barre Menu -->
              <div id="barre_menu">

                <!-- Menu Mobile -->
                <div class="header">
                      <a href="#menu"></a>
                </div>
                <!-- Fin Menu Mobile -->

                <!-- Menu Site -->

                <div id="menu_big">
                   <ul id="menu_site">
                      <li><a href="{{ route('knxtunisie-acceuil') }}" title="Accueil">Accueil</a></li>
                      <li><a href="{{ route('knx') }}" title="KNX">KNX</a></li>
                      <li><a href="{{ route('knxtunisie-logiciel') }}" title="Outils/logiciels">Logiciels</a></li>
                      <li><a href="{{ route('knxtunisie-doc') }}" title="Documentation">Documentation</a></li>
                      <li><a href="{{ route('knxtunisie-com') }}" title="Communauté">Communauté</a></li>
                      <li><a href="{{ route('knxtunisie-formation') }}" title="Formation">Formation</a></li>
                      <li><a href="{{ route('knxtunisie-actus') }}" title="News">Actus</a></li>
                      <li><a href="{{ route('knxtunisie-contact') }}" title="Contact">Contact</a></li>

                  </ul>
                </div>
                 <!-- Fin Menu Site -->

            </div>
            <!-- Fin Barre Menu -->

        </div>
        <!--  fin Menu   -->







        <!--  Site   -->
        <div id="site">
            <!--  Slideshow   -->
            <div id="slideshow">
                <div class="head" id="ancre">
                <div class="flexslider">
                    <ul class="slides">

                    <li style="width: 100%; float: left; margin-right: -100%; display: none;">
                    <a href="https://bit.ly/2Z1TD7q" title="Lire Le KNX Journal 2021" target="_blank">
                        <img src="Front2/images/Bandeau_KNX_Journal_2021_mobile.jpg" alt="header_mob">
                        <img src="Front2/images/Bandeau_KNX_Journal_2021_tab.jpg" alt="header_tab">
                        <img src="Front2/images/Bandeau_KNX_Journal_2021_site.jpg" alt="header_site">
                    </a>
                    </li>
                    <!--
                    <li>
                    <a href="https://youtu.be/_2NIx9Ru_Jw" title="Voir la nouvelle vidéo KNX France" target="_blank">
                        <img src="http://www.knx.fr/images/header_mobile_img37.jpg" alt="header_mob" />
                        <img src="http://www.knx.fr/images/header_tab_img37.jpg" alt="header_tab" />
                        <img src="http://www.knx.fr/images/header_site_img37.jpg" alt="header_site" />
                    </a>
                    </li>
                    -->
                    <li style="width: 100%; float: left; margin-right: -100%; display: none;"> <a href="http://knx.fr/news/Formation_2021/" title="Former en KNX pour développer le marché du Smart Building" target="_blank">
                        <img src="Front2/images/header_mobile_img38.jpg" alt="header_mob">
                        <img src="Front2/images/bandeau_formation_2021_tab.jpg" alt="header_tab">
                        <img src="Front2/images/bandeau_formation_2021.jpg" alt="header_site">
                   </a> </li>

                    <li style="width: 100%; float: left; margin-right: -100%; display: none;">
                    <a href="http://www.knx.fr/KNX-France-ets6.html" title="Logiciel ETS6 : Intelligent, sécurisé et ouvert" target="_blank">
                        <img src="Front2/images/Bandeau_ETS6_mobile.jpg" alt="header_mob">
                        <img src="Front2/images/Bandeau_ETS6_tab.jpg" alt="header_tab">
                        <img src="Front2/images/Bandeau_ETS6_site.jpg" alt="header_site">
                        </a>
                    </li>

                    <li style="width: 100%; float: left; margin-right: -100%; display: none;"><a href="https://bit.ly/2Z1TD7q" title="Lire Le KNX Journal 2021" target="_blank">
                        <img src="Front2/images/Bandeau_KNX_Journal_2021_mobile2.jpg" alt="header_mob">
                        <img src="Front2/images/Bandeau_KNX_Journal_2021_tab2.jpg" alt="header_tab">
                        <img src="Front2/images/Bandeau_KNX_Journal_2021_site2.jpg" alt="header_site">
                        </a> </li>

                    <li style="width: 100%; float: left; margin-right: -100%; display: list-item;">
                        <img src="Front2/images/header_mobile_img41.jpg" alt="header_mob">
                        <img src="Front2/images/header_tab_img41.jpg" alt="header_tab">
                        <img src="Front2/images/header_site_img41.jpg" alt="header_site">
                    </li>
                    </ul>
                <ol class="flex-control-nav"><li><a class="">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li><li><a class="">4</a></li><li><a class="active">5</a></li></ol><ul class="flex-direction-nav"><li><a class="prev" href="#">Previous</a></li><li><a class="next" href="#">Next</a></li></ul></div>
             </div>

            </div>
            <!--  fin Slideshow   -->
            <br>
            <!--  Slideshow   -->
            <div id="logos">
                <iframe id="frame_carousel" src="http://www.knx.fr/carousel_logo_2.html"></iframe>
            </div>
            <!--  fin Slideshow   -->

            <!--  Contenu gauche   -->
            <div id="contenu_gauche">

        <p class="fil-ariane"><a href="KNX-France-accueil.html" title="Accueil">&gt; Accueil</a> &gt; Knx</p>



    <h1>KNX :</h1>

        <a href="KNX-France-membres.html" title="Membres KNX France" style="text-decoration:none;"><div class="accueil-bloc">


            <img src="Front2/images/membres.jpg" alt="accueil">
            <h4>KNX Tunisie</h4>
            <p>L'association KNX Tunisie.</p>

        </div></a>

            </div>
            <!--  fin Contenu gauche   -->


            <!--  Contenu droite   -->
            <div id="contenu_droite">

            <hr id="trait">


                <!------ Bannière animée --->
                <div style="padding: 40px 0 0 0;">

                  <a href="https://bit.ly/2Z1TD7q" style="text-decoration:none;color:#1760b4; " title="Feuilleter le KNX Journal" target="_blank">
                      <img src="Front2/images/Banniere_KNX_Journal_2021_300x200.gif" alt="Feuilleter le KNX Journal">
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
              <p> Retrouvez toute l'actualité de KNX France sur Les reseaux sociaux <a href="http://www.knx.fr/KNX-France-app.html" style="text-decoration:none;color:#1760b4; " title="Accès UserClub France" target="_blank"><img src="Front2/images/en_savoir_plus.jpg" alt="en_savoir_plus"></a></p></div>

                  <br>
                  <br>

                  <div>

                  <h1><a href="http://knx.fr/College_Integrateurs/" title="Collège KNX Intégrateurs" target="_blank">Collège Intégrateurs KNX France</a></h1>
                  <p> Découvrez le Collège KNX Intégrateur <a href="http://knx.fr/College_Integrateurs/" style="text-decoration:none;color:#1760b4; " title="Collège KNX Intégrateurs" target="_blank"><img src="Front2/images/en_savoir_plus.jpg" alt="en_savoir_plus"></a><br>
    </p></div>
                <br><br>



                <div> <h1>Userclub Tunisie</h1>
                  <p> Accès UserClub Tunisie <a href="https://goo.gl/dG9cjz" style="text-decoration:none;color:#1760b4; " title="Accès UserClub France" target="_blank"><img src="Front2/images/en_savoir_plus.jpg" alt="en_savoir_plus"></a><br>
    </p></div>

                <!-- Réseaux Sociaux -->

                <!-- Newsletter -->
                <div id="inscription_newsletter">
                    <h1>S'inscrire à la newsleter</h1>

                    <p>Inscrivez-vous à la e-enewsletter pour recevoir les dernières actualités de KNX France</p>



                    <a href="https://my.sendinblue.com/users/subscribe/js_id/3786j/id/1" title="S'inscrire à la newsletter" style="text-decoration:none;" target="_blank"><div id="bouton_newsletter">Inscription</div></a>

                   <!--

                    <a href="mailto:contact@knx.fr?&subject=Demande%20d'inscription&body=Bonjour,%20%0A%0Aje%20souhaiterais%20m'inscrire%20à%20la%20newsletter.%20%0A%0ACordialement," title="S'inscrire à la newsletter" style="text-decoration:none;"><div id="bouton_newsletter">Inscription</div></a>
                     -->
                </div>
                <!-- Réseaux Sociaux -->



                <br><br>


                <!-- Actualités -->
                <h1>Actualités</h1>



                <p>La formation KNX Basic désormais éligible au financement CPF <a href="http://www.knx.fr/KNX-France-KNX-Basic-CPF.html" style="text-decoration:none;color:#1760b4;" title="La formation KNX Basic désormais éligible au financement CPF" target="_blank"><img src="Front2/images/en_savoir_plus.jpg" alt="en_savoir_plus"></a><br>

                </p>


                <!-- Actualités -->



                <p>Airzone rejoint KNX France <a href="http://serveur-infocom.fr/presse/CP_Adhesion_Airzone_11_03_22.pdf" style="text-decoration:none;color:#1760b4;" title="Airzone rejoint KNX France" target="_blank"><img src="Front2/images/en_savoir_plus.jpg" alt="en_savoir_plus"></a><br>

                </p>


                <!-- Actualités -->



                <p>Le Collège Intégrateurs KNX France présente ses nouveaux représentants <a href="http://knx.fr/College_Integrateurs/liste/" style="text-decoration:none;color:#1760b4;" title="Le Collège Intégrateurs KNX France présente ses nouveaux représentants" target="_blank"><img src="Front2/images/en_savoir_plus.jpg" alt="en_savoir_plus"></a><br>

                </p>


                <!-- Actualités -->


                <a href="KNX-France-actualites.html" title="Actualités"><h4>Plus d'actualités</h4></a>
                <br>


                <!-- Événements -->
                <h1>Événements</h1>






                <!-- Événements -->
            </div>
            <!--  fin Contenu droite   -->

        </div>
        <!--  fin Site   -->





        <!--  Footer   -->
        <div id="footer">
            <div id="limite_footer_site">
                <div class="footers">
                    <h2>Site de vente en ligne</h2>
                    <a href="https://my.knx.org/" title="MyKNX" target="_blank">MyKNX</a><br>


              </div>

                <div class="footers">

                   <h2>Contact Logiciel</h2>

                <span>
                    Tél. : +32 (0)27 75 86 59<br>
                    email : <a href="mailto:info@knx.org" title="Envoyer un email">info@knx.org</a></span>
                </div>

                <div class="footers">
                    <h2>KNX Tunisie</h2>
                    <span>Adresse:</span>
                    <a href="https://www.google.com/maps/place/Rue+de+Rakkada,+Sfax/@34.7445164,10.7602546,19z/data=!4m13!1m7!3m6!1s0x1301d2d0b8847da9:0xa97f427d4ee77845!2sCit%C3%A9+Jardin,+Sfax!3b1!8m2!3d34.7488433!4d10.7626385!3m4!1s0x1301d2d135b34641:0x9564a3e57a2e79f4!8m2!3d34.7444391!4d10.76059" target="_blanc"><span>Adresse: Rue de Rakkada,Cité Zitouna Imm65 App4 , Sfax, Tunisia</span></a>
                </div>

        <div style="clear:both;"></div>
      </div>

        </div>
        <!--  fin Footer   -->








        <!--  Menu Mobile   -->

        <!--  fin Menu Mobile   -->

    </div>
    <!--  fin div globale di site  -->

    <div id="mm-blocker"></div></body></html>
