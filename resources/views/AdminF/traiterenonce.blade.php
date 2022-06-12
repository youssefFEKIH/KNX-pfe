<!DOCTYPE html>
<html lang="Fr">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formateur Dashboard</title>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//imagehover.min.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('Front/css')}}//style.css">
  <link rel="shortcut icon" href="{{ asset('Front/img')}}/course01.jpg" type="image/x-icon">


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
        <a class="navbar-brand" href=""> acceuil</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="{{route('AdminDashboard/cour')}}"> Cours En ligne</a></li>
          <li><a href="{{route('courp')}}">Cours Presentiels</a></li>
          <li><a href="{{route('profilF')}}">Profil</a></li>         
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

   <h2 class="Formateurs"> Traitement D'enoncé : {{$Enonce->enonce}}  </h2>
</head>
<div class="text-center"> 
    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#choix">Ajouter Choix</button>
<a href="{{route('AdminDashboard/cour')}}"><button type="submit" class="btn btn-warning" >Listes des Cours</button></a>
</div>

<div class="text-center"> <h3>Listes des choix</h3></div>
  <table >
   <tr>
    <th>Id</th>
    <th>nom</th>
    <th>type</th>
    <th>Modifier</th>
    <th>Supprimer</th>
    </tr>
@foreach($choix as $ch)
   <tr>
   <td>{{$ch->id}}</td>
   <td>{{$ch->choix}}</td>
   <th>{{$ch->type}}</th>
   <td>
    <button type="submit" class="btn btn-primary"data-toggle="modal" data-target="#modifier{{$ch->id}}">modifier</button>
    </td>
        <td>
     <form   action="{{route('supprimerchoix',$ch->id)}}" method="POST">
       @csrf
    <button onclick="return confirm('voulez-vous vraiment supprimer ?')"  type="submit" class="btn btn-danger">Supprimer</button>
     </form>
    </td>
    </tr>
@endforeach
   </table>
   


   @foreach($choix as $ch)
  <!--Modal box-->
<div class="modal fade" id="modifier{{$ch->id}}" role="dialog">
    <div class="modal-dialog modal-sm-9">
      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Modifier cour</h4>
        </div>
        <div class="modal-body padtrbl">
         
            <div class="form-group">
            <form action="{{route('modifierchoix',$ch->id)}}" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf
      <div class="form-group has-feedback">
        <!----- Titre -------------->
          <input type="text" class="form-control" name="nom" value="{{$ch->choix}}"  placeholder="Titre" autocomplete="off" required/>
        </div>
        <div >
        <label style=color:black; >Choix</label>
        <!----- Type -------------->
        <select name="type"> 
            <option  selected>Correcte</option>
            <option  selected>Incorrect</option>
            
        </select>
     </div>
        <div class="form-group has-feedback">
        <!----- hidden -------------->
          <input type="hidden" class="form-control" name="id" value="{{$Enonce->id}}"  placeholder="Titre" autocomplete="off" required/>
        </div>
<button type="submit" class="btn btn-green btn-block btn-flat">Modifier</button>
</div></div></form></div> </div></div></div> </div></div>
  <!--/ Modal box-->
@endforeach

  
      <!--Modal box-->
<div class="modal fade" id="choix" role="dialog">
    <div class="modal-dialog modal-sm-9">
      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Ajouter un choix</h4>
        </div>
        <div class="modal-body padtrbl">
         
            <div class="form-group">
            <form action="{{route('ajouterchoix',$Enonce->id)}}" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf
      <div class="form-group has-feedback">
        <!----- Titre -------------->
          <input type="text" class="form-control" name="nom"  placeholder="Titre" autocomplete="off" required/>
        </div>
        <div >
        <label style=color:black; >Choix</label>
        <!----- Type -------------->
        <select name="type"> 
            <option  selected>Correcte</option>
            <option  selected>Incorrect</option>
            
        </select>
     </div>
        <button type="submit" class="btn btn-green btn-block btn-flat">Ajouter</button>
        </form></div> </div></div></div> </div></div>
  <!--/ Modal box-->


<script src="{{ asset('Front/js')}}/jquery.min.js"></script>
  <script src="{{ asset('Front/js')}}/jquery.easing.min.js"></script>
  <script src="{{ asset('Front/js')}}/bootstrap.min.js"></script>
  <script src="{{ asset('Front/js')}}/custom.js"></script>
  <script src="{{ asset('Front/contactform')}}/contactform.js"></script>