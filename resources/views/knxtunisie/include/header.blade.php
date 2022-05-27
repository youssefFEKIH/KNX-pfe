<html lang="fr">
    <head>

    <link rel="shortcut icon" href="{{ asset('Front2/images/logo/knx.png')}}" type="image/png">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="KNX : le standard mondial pour la gestion technique des bâtiments résidentiels et tertiaires">
    <meta name="keywords" content="domotique, immotique, knx, konnex, EIB, ETS, ETS3, ETS4, gestion du bâtiment, technique, GTB, automatisme, GTC ">
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

    <!-- readMore-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    var max = 200;
    $(".readMore").each(function() {
        var str = $(this).text();
        if ($.trim(str).length > max) {
            var subStr = str.substring(0, max);
            var hiddenStr = str.substring(max, $.trim(str).length);
            $(this).empty().html(subStr);
            $(this).append(' <a href="javascript:void(0);" class="lire-plus">lire plus</a>');
            $(this).append('<span class="addText">' + hiddenStr + '</span>');
        }
    });
    $(".lire-plus").click(function() {
        $(this).siblings(".addText").contents().unwrap();
        $(this).remove();
    });
});
    </script>
    <style>
    .readMore .addText {
    display: none;
}
    </style>


    <!-- Script Nouveau Slideshow -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"> </script>
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
    </head>
    <body><nav id="menu" class="mm-menu mm-horizontal mm-ismenu mm-offcanvas"><ul class="mm-list mm-panel mm-opened mm-current" id="mm-0">
                <li><a href="{{ route('knxtunisie-acceuil') }}" title="Accueil">Accueil</a></li>
                <li><a href="{{ route('knx') }}" title="KNX">KNX</a></li>
                <li><a href="{{ route('knxtunisie-logiciel') }}" title="Outils/logiciels">Logiciels</a></li>
                <li><a href="{{ route('knxtunisie-doc') }}" title="Documentation">Documentation</a></li>
                <li><a href="{{ route('knxtunisie-com') }}" title="Communauté">Communauté</a></li>

                <li><a href="{{ route('knxtunisie-formation') }}" title="Formation">Formation</a></li>
                <li><a href="{{ route('knxtunisie-actus') }}" title="News">Actus</a></li>
                <li><a href="{{ route('knxtunisie-contact') }}" title="Contact">Contact</a></li>

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
               <img src="Front2/images/logo/knx.png" alt="logo" height="135px">

                </a>

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
                      <li><a href="{{ route('knxtunisie-contact') }}" title="Contact">Contact.</a></li>

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

                    @php($count=0)
                    @foreach($N as $NS)
                    @if($count < 1)
                    @php($count++)
                    <img src="{{ asset ('images/' . $NS->url_image)}}" class="im"  alt="header_site">
                    @endif
                    @endforeach

                    </li>








                    </ul>
                <ol class="flex-control-nav"><li><a class="">1</a></li><li><a class="">2</a></li><li><a class="">3</a></li><li><a class="">4</a></li><li><a class="active">5</a></li></ol><ul class="flex-direction-nav"><li><a class="prev" href="#">Previous</a></li><li><a class="next" href="#">Next</a></li></ul></div>
             </div>

            </div>
            <!--  fin Slideshow   -->
            <br>
            <!--  Slideshow   -->
            <div id="logos">
                <iframe id="frame_carousel" src=""> </iframe>
            </div>
            <!--  fin Slideshow   -->

           <!--  Contenu gauche   -->
           <div id="contenu_gauche">


           </div>
           <!--  fin Contenu gauche   -->


        </div>
        <!--  fin Site   -->


    </div>
    <!--  fin div globale di site  -->

    <div id="mm-blocker"></div></body></html>
