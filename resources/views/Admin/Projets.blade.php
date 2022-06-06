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
#titre{
    color:black;
    font-size: 20px;
    text-decoration: underline;
}
</style>

  <br />
   <br />
   <h2 class="Formateurs">Liste des Projets</h2>
      <div class="text-center"><a href="#Ajouter un Projet"><button type="button" class="btn btn-warning">Ajouter un Projet</button></a></div>
   <br />
  </div>
  <br />
  @if(session()->has('success'))
        <div class="container">
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        </div>
    @endif 
    @if(session()->has('erreur'))
        <div class="container">
            <div class="alert alert-danger">
                {{ session()->get('erreur') }}
            </div>
        </div>
    @endif 
  <table >
   <tr>
    <th>Id</th>
    <th>image</th>
    <th>Titre</th>
    <th>Description</th>
    <th>Supprimer</th>
    <th>Modifier</th>
   </tr>
   @foreach($projet as $projets)
   <tr>
   <td>{{$projets->id}}</td>
   <td><img src="{{ asset ('images/' . $projets->url_image)}}"  height="100px" width="100px"  ></td>
    <td>{{$projets->titre}}</td>
    <td>{{$projets->description}}</td>

    <td>
     <form   action="{{route('supprimerP',$projets->id)}}" method="POST">
       @csrf
    <button onclick="return confirm('voulez-vous vraiment supprimer ?')" type="submit" class="btn btn-danger">Supprimer</button>
     </form>
    </td>
     <td>
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modifier{{$projets->id}}">Modifier</button>
     </td>
   </tr>
   @endforeach
  </table>

<div class="modal-body padtrbl">
 </br>
 </br>
 <div class="login-box-body">
  <p class="login-box-msg" id="Ajouter un Projet">Ajouter un Projet</p>
  <div class="form-group">
    <form action="/AdminDashboard/projet" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf
      <div class="form-group has-feedback">
        <!----- Titre -------------->
          <input type="text" class="form-control" name="titre"  placeholder="Titre" autocomplete="off" required/>
        </div>
      <div class="form-group has-feedback">
        <!----- description -------------->
        <textarea class="form-control" name="description" rows="5" cols="155" placeholder="description" required></textarea>
      </div>
       <div class="form-group has-feedback">
        <!----- image -------------->
        <label style=color:black;>Ajouter une photo de projet</br></label>
         <input type="file" name="url_image" accept=".png, .jpg, .jpeg"  required>
        </div>

        <button type="submit" class="btn btn-green btn-block btn-flat">Ajouter</button>
    </form>
  </div>
 </div>
</div>

</div>
</div>




@foreach($projet as $projets)


<!--Modal box-->
<div class="modal fade" id="modifier{{$projets->id}}" role="dialog">
    <div class="modal-dialog modal-sm-9">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Modifier cour Presentiel</h4>
        </div>
        <div class="modal-body padtrbl">

         
            <div class="form-group">
            <form action="{{route('modifierprojet',$projets->id)}}" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf
      <div class="form-group has-feedback">
        <!----- Titre -------------->
          <input type="text" class="form-control" name="titre"  placeholder="Titre" value="{{$projets->titre}}" required/>
        </div>
      <div class="form-group has-feedback">
        <!----- description -------------->
        <textarea class="form-control" name="description" rows="5" cols="155" placeholder="description"  required>{{$projets->description}} </textarea>
      </div>
      <div class="form-group has-feedback">
        <!----- hidden -------------->
        <input type="hidden" class="form-control" name="id" value="{{$projets->id}}" ></textarea>
      </div>
       <div class="form-group has-feedback">
        <!----- image -------------->
        <label style=color:black;>Ajouter une photo de projet</br></label>
         <input type="file" name="url_image" accept=".png, .jpg, .jpeg" required>
        </div>

        <button type="submit" class="btn btn-green btn-block btn-flat">Modifier</button>
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