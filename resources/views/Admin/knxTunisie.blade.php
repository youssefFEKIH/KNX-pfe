<!DOCTYPE html>
<html lang="Fr">

 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>


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
        <a class="navbar-brand" href=""> Acceuil</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('AdminDashboard') }}">Liste des Formateurs</a></li>
          <li><a href="{{ route('AdminDashboard/projet') }}">Projet de Fin d'Études</a></li>
          <li><a href="{{ route('AdminDashboard/cv') }}">cv</a></li>
          <li><a href="{{ route('AdminDashboard/KNX') }}">knx Tunisie</a></li>
          <li><a href="{{ route('AdminDashboard/candidat') }}">Liste des Candidats</a></li>
          <li><a href="{{ route('AdminDashboard/messages') }}"> Les Messages reçus</a></li>
          <li class="btn-trial"><a href="/deconnexion" >Se déconnecter</a></li>
         </ul>
      </div>
    </div>
  </nav>
  <!--/ Navigation bar-->
  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 2px;
  color:black;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.Formateurs { text-align: center; }
</style>

  <br />
   <br />
   <h2 class="Formateurs">Liste des images d'accueil</h2>
   <div class="text-center">
<a href="#Ajouter image d'accueil"><button type="button" class="btn btn-warning">Ajouter image d'accueil</button></a>
<a href="#Liste des nouveautés"><button type="button" class="btn btn-secondary">Liste des nouveautés</button></a>
<a href="#Ajouter des nouveautés"><button type="button" class="btn btn-success">Ajouter des nouveautés</button></a></div>
   <br />
  </div>
  <table >
   <tr>
    <th>Id</th>
    <th>Image</th>
    <th>Supprimer</th>
   </tr>
   @foreach($N as $NS)
   <tr>
   <td>{{$NS['id']}}</td>
   <td>  <img src="{{ asset ('images/' . $NS->url_image)}}" height="100px" width="250px"></td>
    
    <td>
     <form   action="{{route('supprimerI',$NS->id)}}" method="POST">
       @csrf
    <button type="submit" onclick="return confirm('voulez-vous vraiment supprimer ?')" class="btn btn-danger">Supprimer</button>
     </form>
    </td>
   </tr>
   @endforeach
  </table>
  
  <div class="modal-body padtrbl">
</br>
</br>
<div class="login-box-body" id="Ajouter image d'accueil">
  <p class="login-box-msg">Ajouter image d'accueil</p>
  <div class="form-group">
    
    <form action="/AdminDashboard/image" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf 
        <!----- image -------------->
        <label style=color:black;>Ajouter un image d'acceuil</br></label>
         <input type="file" name="url_image" accept=".png, .jpg, .jpeg" required>
        </div>
      

<button type="submit" class="btn btn-green btn-block btn-flat">Ajouter</button>

</div>
      </div>
    </form>
  </div>
</div>

</div>

</br>
<h2 class="Formateurs" id="Liste des nouveautés">Liste des nouveautés</h2></br>

<table >
 <tr>
  <th>Id</th>
  <th>Url_nouveaute</th>
  <th>Titre</th>
  <th>Description</th>
  <th>Type</th>
  <th>Supprimer</th>
  <th>Modifier</th>
 </tr>
 @foreach($No as $Nos)
 <tr>
 <td>{{$Nos->id}}</td>
 <td>  <img src="{{ asset ('images/' . $Nos->url_nouveaute)}}" height="100px" width="100px"></td>
 <td>{{$Nos->titre}}</td>
 <td>{{$Nos->description}}</td>
 <td>{{$Nos->type}}</td>
  <td>
   <form   action="{{route('supprimerN',$Nos->id)}}" method="POST">
     @csrf
  <button type="submit" onclick="return confirm('voulez-vous vraiment supprimer ?')" class="btn btn-danger">Supprimer</button>
   </form>
  </td>
  <td>
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modifier{{$Nos->id}}">Modifier</button>
     </td>
 </tr>
 @endforeach
</table>

<div class="modal-body padtrbl">
</br>
</br>
<div class="login-box-body" id ="Ajouter des nouveautés">
<p class="login-box-msg">Ajouter des nouveautés</p>
<div class="form-group">
  <form action="/AdminDashboard/nouv" method="POST" enctype="multipart/form-data"  id="loginForm">
    @csrf 
    <div class="form-group has-feedback">
      <!----- Titre -------------->
        <input type="text" class="form-control" name="titre"  placeholder="Titre" autocomplete="on" maxlength="50" required/>
      </div>
    <div class="form-group has-feedback">
      <!----- description -------------->
      <textarea  name="description" rows="5" cols="155"  required></textarea>
    </div>
    <div >
      <label style=color:black; >La page d'affichage:</label></br>
      <!----- Type -------------->
      <select name="type"> 
          <option  selected>Acceuil</option>
          <option  >Actus</option>
          <option  >KNX</option>
          <option  >Communauté</option>
          <option  >Contact</option>
          <option  >Documentation</option>
          <option  >Formation</option>
          <option  >Logiciel</option>
      </select>
    <div>
      <!----- image -------------->
      <label style=color:black;>Ajouter un image pour la publication</br></label>
       <input type="file" name="url_nouveaute" accept=".png, .jpg, .jpeg" required>
      </div>
    

<button type="submit" class="btn btn-green btn-block btn-flat">Ajouter</button>

</div>
    </div>
  </form>
</div>
</div>

</div>
</div>

</div>



@foreach($No as $Nos)


<!--Modal box-->
<div class="modal fade" id="modifier{{$Nos->id}}" role="dialog">
    <div class="modal-dialog modal-sm-9">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Modifier nouveautés</h4>
        </div>
        <div class="modal-body padtrbl">

         
            <div class="form-group">
            <form action="/modifier/NouvKnx" method="POST" enctype="multipart/form-data"  id="loginForm">
    @csrf 
    <div class="form-group has-feedback">
      <!----- Titre -------------->
        <input type="text" class="form-control" name="titre"  value="{{$Nos->titre}}" required/>
      </div>
    <div class="form-group has-feedback">
      <!----- description -------------->
      <textarea  name="description" rows="5" cols="65" required>{{$Nos->description}}</textarea>
    </div>
    <div >
      <label style=color:black; >La page d'affichage:</label></br>
      <!----- Type -------------->
      <select name="type" value="{{$Nos->type}}"> 
          <option  >Acceuil</option>
          <option  >Actus</option>
          <option  >KNX</option>
          <option  >Communauté</option>
          <option  >Contact</option>
          <option  >Documentation</option>
          <option  >Formation</option>
          <option  >Logiciel</option>
      </select>
    <div>
      <!----- image -------------->
      <label style=color:black;>Ajouter un image pour la publication</br></label>
       <input type="file" name="url_nouveaute" accept=".png, .jpg, .jpeg" required>
      </div>
      <!----- hidden  -------------->
    
       <input type="hidden" name="id" value="{{$Nos->id}}" required>
      </div>

<button type="submit" class="btn btn-green btn-block btn-flat">Modifier</button>

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

  @endforeach






<script src="{{ asset('Front/js')}}/jquery.min.js"></script>
  <script src="{{ asset('Front/js')}}/jquery.easing.min.js"></script>
  <script src="{{ asset('Front/js')}}/bootstrap.min.js"></script>
  <script src="{{ asset('Front/js')}}/custom.js"></script>
  <script src="{{ asset('Front/contactform')}}/contactform.js"></script>
</body>
  </html>