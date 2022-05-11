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
        <a class="navbar-brand" href=""> dashboard</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('AdminDashboard') }}">Liste des Formateurs</a></li>
          <li><a href="{{ route('AdminDashboard/projet') }}">Projet de Fin d'Études</a></li>
          <li><a href="{{ route('AdminDashboard/cv') }}">cv</a></li>
          <li><a href="{{ route('AdminDashboard/KNX') }}">knx Tunisie</a></li>
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
   <h2 class="Formateurs">Liste des Projets</h2>
   <br />
  </div>
  <table >
   <tr>
    <th>id</th>
    <th>image</th>
    <th>Delete</th>
   </tr>
   @foreach($N as $NS)
   <tr>
   <td>{{$NS['id']}}</td>
   <td>  <img src="{{ asset ('images/' . $NS->url_image)}}" width="500px;" height="150px;"></td>
    
    <td>
     <form   action="{{route('supprimerI',$NS->id)}}" method="POST">
       @csrf
    <button type="submit" class="btn btn-danger">Supprimer</button>
     </form>
    </td>
   </tr>
   @endforeach
  </table>
  
  <div class="modal-body padtrbl">
</br>
</br>
<div class="login-box-body">
  <p class="login-box-msg">Ajouter image d'accueil</p>
  <div class="form-group">
    <form action="/AdminDashboard/image" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf 
        <!----- image -------------->
        <label style=color:black;>Ajouter une photo de projet</br></label>
         <input type="file" name="url_image"  required>
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
