<html lang="fr">
    <head>

    <link rel="shortcut icon" href="{{ asset('Front2/images/logo/knx.png')}}" type="image/png">
     <!-- titres des pages -->
     <title>KNX Tunisie </title><!-- Fin Titres des pages -->   
</head>
<body>
</br> 
<h1 style="text-align:center">  {{$No->titre}}</h1>

   <div style="text-align:center">       <img src="{{ asset ('images/' . $No->url_nouveaute)}}" alt="accueil" height="380px" width="500px"></div>
        
                <a  style="line-height: 150%;" style="text-align: justify;"style="color:black;"> <p >{{$No->description}}</p><a>
                 </div>
                
           </div>
</body>
</html>