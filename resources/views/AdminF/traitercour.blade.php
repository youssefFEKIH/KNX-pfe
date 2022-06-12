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

   <h2 class="Formateurs"> Traitement Du cour : {{$Cours->nom}}  </h2>
</head>
<div class="text-center"> <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#chapitre">Ajouter chapitre</button>
<button type="submit" class="btn btn-success" data-toggle="modal" data-target="#test">Ajouter un test </button>
<a href="{{route('AdminDashboard/cour')}}"><button type="submit" class="btn btn-warning" >Listes des Cours</button></a>
</div>
   
<!--Modal box-->
<div class="modal fade" id="chapitre" role="dialog">
    <div class="modal-dialog modal-sm-9">
      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Ajouter un chapitre</h4>
        </div>
        <div class="modal-body padtrbl">
         
            <div class="form-group">
            <form action="{{route('ajouterchapitre',$Cours->id)}}" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf
      <div class="form-group has-feedback">
        <!----- Titre -------------->
          <input type="text" class="form-control" name="nom"  placeholder="Titre" autocomplete="off" required/>
        </div>
        <button type="submit" class="btn btn-green btn-block btn-flat">Ajouter</button>
        </form></div> </div></div></div> </div></div>
  <!--/ Modal box-->

  <div class="text-center"> <h3>Listes des chapitres</h3></div>
  <table >
   <tr>
    <th>Id</th>
    <th>nom</th>
    <th>Modifier</th>
    <th>Traiter</th>
    <th>Supprimer</th>
    </tr>
@foreach($Cour as $Ch)
   <tr>
   <td>{{$Ch->id}}</td>
  <td>{{$Ch->nom}}</td>
  <td>
    <button type="submit" class="btn btn-primary"data-toggle="modal" data-target="#modifier{{$Ch->id}}">modifier</button>
    </td>
    <td>
    
     <form   action="{{route('traiterchapitre',$Ch->id)}}" method="POST">
       @csrf
    <button type="submit" class="btn btn-success">Traiter</button>
     </form>
    </td>
    <td>
     <form   action="{{route('supprimerchapitre',$Ch->id)}}" method="POST">
       @csrf
    <button onclick="return confirm('voulez-vous vraiment supprimer ?')"  type="submit" class="btn btn-danger">Supprimer</button>
     </form>
    </td>
    
    
   </tr>
   @endforeach
   

  </table>


  <div class="text-center"> <h3>Listes des Tests</h3></div>
  <table >
   <tr>
    <th>Id</th>
    <th>nom</th>
    <th>Modifier</th>
    <th>Traiter</th>
    <th>Supprimer</th>
    </tr>
@foreach($Test as $ts)
   <tr>
   <td>{{$ts->id}}</td>
  <td>{{$ts->nom}}</td>
  <td>
    <button type="submit" class="btn btn-primary"data-toggle="modal" data-target="#modifierT{{$ts->id}}">modifier</button>
    </td>
    <td>
    
     <form   action="{{route('traitertest',$ts->id)}}" method="POST">
       @csrf
    <button type="submit" class="btn btn-success">Traiter</button>
     </form>
    </td>
    <td>
     <form   action="{{route('supprimertest',$ts->id)}}" method="POST">
       @csrf
    <button onclick="return confirm('voulez-vous vraiment supprimer ?')"  type="submit" class="btn btn-danger">Supprimer</button>
     </form>
    </td>
    
    
   </tr>
   @endforeach
   

  </table>

  @foreach($Cour as $Ch)
  <!--Modal box-->
<div class="modal fade" id="modifier{{$Ch->id}}" role="dialog">
    <div class="modal-dialog modal-sm-9">
      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Modifier cour</h4>
        </div>
        <div class="modal-body padtrbl">
         
            <div class="form-group">
            <form action="{{route('modifierchapitre',$Ch->id)}}" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf
      <div class="form-group has-feedback">
        <!----- Titre -------------->
          <input type="text" class="form-control" name="nom" value="{{$Ch->nom}}"  placeholder="Titre" autocomplete="off" required/>
        </div>
        <div class="form-group has-feedback">
        <!----- hidden -------------->
          <input type="hidden" class="form-control" name="id" value="{{$Cours->id}}"  placeholder="Titre" autocomplete="off" required/>
        </div>
<button type="submit" class="btn btn-green btn-block btn-flat">Modifier</button>
</div></div></form></div> </div></div></div> </div></div>
  <!--/ Modal box-->
@endforeach


            <!--Modal box-->
<div class="modal fade" id="question" role="dialog">
    <div class="modal-dialog modal-sm-9">
      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Ajouter un question</h4>
        </div>
        <div class="modal-body padtrbl">
         
            <div class="form-group">
            <form action="{{route('ajouterquestion',$Cours->id)}}" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf
      <div class="form-group has-feedback">
        <!----- Titre -------------->
          <input type="text" class="form-control" name="nom"  placeholder="Question" autocomplete="off" required/>
        </div>
       
        <button type="submit" class="btn btn-green btn-block btn-flat">Ajouter</button>
        </form></div> </div></div></div> </div></div>
  <!--/ Modal box-->

         <!--Modal box-->
         <div class="modal fade" id="test" role="dialog">
    <div class="modal-dialog modal-sm-9">
      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Ajouter un test</h4>
        </div>
        <div class="modal-body padtrbl">
         
            <div class="form-group">
            <form action="{{route('ajoutertest',$Cours->id)}}" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf
      <div class="form-group has-feedback">
        <!----- Titre -------------->
          <input type="text" class="form-control" name="nom"  placeholder="Titre" autocomplete="off" required/>
        </div>
       
        <button type="submit" class="btn btn-green btn-block btn-flat">Ajouter</button>
        </form></div> </div></div></div> </div></div>
  <!--/ Modal box-->
  @foreach($Test as $ts)
           <!--Modal box-->
           <div class="modal fade" id="modifierT{{$ts->id}}" role="dialog">
    <div class="modal-dialog modal-sm-9">
      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Modifier  test</h4>
        </div>
        <div class="modal-body padtrbl">
         
            <div class="form-group">
            <form action="{{route('modifiertest',$ts->id)}}" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf
      <div class="form-group has-feedback">
        <!----- Titre -------------->
          <input type="text" class="form-control" name="nom"  value="{{$ts->nom}}" autocomplete="off" required/>
        </div>
        <div class="form-group has-feedback">
        <!----- hidden -------------->
          <input type="hidden" class="form-control" name="id" value="{{$Cours->id}}"  placeholder="Titre" autocomplete="off" required/>
        </div>
       
        <button type="submit" class="btn btn-green btn-block btn-flat">Modifier</button>
        </form></div> </div></div></div> </div></div>
  <!--/ Modal box-->
@endforeach


  <script src="{{ asset('Front/js')}}/jquery.min.js"></script>
  <script src="{{ asset('Front/js')}}/jquery.easing.min.js"></script>
  <script src="{{ asset('Front/js')}}/bootstrap.min.js"></script>
  <script src="{{ asset('Front/js')}}/custom.js"></script>
  <script src="{{ asset('Front/contactform')}}/contactform.js"></script>