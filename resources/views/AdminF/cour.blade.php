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
        <a class="navbar-brand" href=""> acceuil</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{route('AdminDashboard/cour')}}"> Cours En ligne</a></li>
          <li><a href="{{route('courp')}}">Cours Presentiel</a></li>
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
   <h2 class="Formateurs"> Cours en ligne </h2>
   <div class="text-center"> 
   <button type="submit" class="btn btn-success"data-toggle="modal" data-target="#cour">Ajouter cour</button>
</div>
   <br />
  </div>


  <div class="text-center"> <h3>Listes des cours</h3></div>
  <table >
   <tr>
    <th>Id</th>
    <th>image</th>
    <th>Titre</th>
    <th>Résumer</th>
    <th>Modifier</th>
    <th>Traiter</th>
    <th>Supprimer</th>
    <th>Listes des participants</th>
   </tr>
@foreach($Cour as $Cours)
   <tr>
   <td>{{$Cours->id}}</td>
   <td><img src="{{ asset ('images/' . $Cours->url_image)}}" height="50px" width="50px"  ></td>
    <td>{{$Cours->nom}}</td>
    <td>{{$Cours->description}}</td>
    <td>
    <button type="submit" class="btn btn-primary"data-toggle="modal" data-target="#modifier{{$Cours->id}}">modifier</button>
    </td>
    <td>
     <form   action="{{route('traitercours',$Cours->id)}}" method="POST">
       @csrf
    <button type="submit" class="btn btn-success">Traiter</button>
     </form>
    </td>
    <td>
           <form   action="{{route('supprimerCour',$Cours->id)}}" method="POST">
       @csrf
    <button onclick="return confirm('voulez-vous vraiment supprimer ?')"  type="submit" class="btn btn-danger">Supprimer</button>
     </form>
    </td>
    
   
    <td>
 
    <a href="{{route('listeE',$Cours->id)}}"><button type="submit" class="btn btn-warning">Listes des participants</button></a>
     </form>
    </td>
   </tr>
   @endforeach

  </table>







<!--Modal box-->
<div class="modal fade" id="cour" role="dialog">
    <div class="modal-dialog modal-sm-9">
      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Ajouter cour</h4>
        </div>
        <div class="modal-body padtrbl">
         
            <div class="form-group">
            <form action="/AdminDashboard/cour" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf
      <div class="form-group has-feedback">
        <!----- Titre -------------->
          <input type="text" class="form-control" name="nom"  placeholder="Titre" autocomplete="off" required/>
        </div>
      <div class="form-group has-feedback">
        <!----- description -------------->
        <textarea  name="description" rows="10" cols="65" placeholder="description" required></textarea>
      </div>
      <div >
        <label style=color:black; >Type de cour:</label>
        <!----- Type -------------->
        <select name="type"> 
            <option  selected>En Ligne</option>
        </select>
     </div>
       <div class="form-group has-feedback">
        <!----- image -------------->
        <label style=color:black;>Ajouter une photo de cour</br></label>
         <input type="file" name="url_image" accept=".png, .jpg, .jpeg" required>
        </div>
<button type="submit" class="btn btn-green btn-block btn-flat">Ajouter</button>
</div></div></form></div> </div></div></div> </div></div>
  <!--/ Modal box-->

  

 <!--/---------------------------------------------------------------------------------------------------->
@foreach($Cour as $Cours)
  <!--Modal box-->
<div class="modal fade" id="modifier{{$Cours->id}}" role="dialog">
    <div class="modal-dialog modal-sm-9">
      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Modifier cour</h4>
        </div>
        <div class="modal-body padtrbl">
         
            <div class="form-group">
            <form action="{{route('modifiercours',$Cours->id)}}" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf
      <div class="form-group has-feedback">
        <!----- Titre -------------->
          <input type="text" class="form-control" name="nom" value="{{$Cours->nom}}"  placeholder="Titre" autocomplete="off" required/>
        </div>
      <div class="form-group has-feedback">
        <!----- description -------------->
        <textarea  name="description" rows="10" cols="65" placeholder="description" required>{{$Cours->description}}</textarea>
      </div>
      <div >
        <label style=color:black; >Type de cour:</label>
        <!----- Type -------------->
        <select name="type"> 
            <option  selected>En Ligne</option>
        </select>
     </div>
       <div class="form-group has-feedback">
        <!----- image -------------->
        <label style=color:black;>Ajouter une photo de cour</br></label>
         <input type="file" name="url_image" accept=".png, .jpg, .jpeg" required>
        </div>
<button type="submit" class="btn btn-green btn-block btn-flat">Modifier</button>
</div></div></form></div> </div></div></div> </div></div>
  <!--/ Modal box-->
@endforeach


<script src="{{ asset('Front/js')}}/jquery.min.js"></script>
  <script src="{{ asset('Front/js')}}/jquery.easing.min.js"></script>
  <script src="{{ asset('Front/js')}}/bootstrap.min.js"></script>
  <script src="{{ asset('Front/js')}}/custom.js"></script>
  <script src="{{ asset('Front/contactform')}}/contactform.js"></script>
</body>
  </html>
