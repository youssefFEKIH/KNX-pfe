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

  <br> <br>
 
   <h2 class="Formateurs" id="Liste des Formateurs">Liste des Formateurs</h2>
   <div class="text-center">  
<a href="#Ajouter un Formateur"><button type="button" class="btn btn-success">Ajouter un Formateur</button>

<a href="#Liste des membres"><button  type="button" class="btn btn-warning">Liste des membres</button></a></div>
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
   <br />
  </div>
  <table >
   <tr>
    <th>id</th>
    <th>nom</th>
    <th>mail</th>
    <th>tel</th>
    <th>type</th>
    <th>Supprimer</th>
    <th>Modifier</th>
   </tr>
   @foreach($formateur as $row)
   <tr>
   <td>{{$row['id']}}</td>
    <td>{{$row['nom']}}</td>
    <td>{{$row['mail']}}</td>
    <td>{{$row['tel']}}</td>
    <td>{{$row['type']}}</td>

    <td>
     <form   action="{{route('supprimerF',$row['id'])}}" method="POST">
       @csrf
    <button type="submit" onclick="return confirm('voulez-vous vraiment supprimer ?')" class="btn btn-danger">Supprimer</button>
     </form>
    </td>
    <td>
      
   </tr>
   @endforeach
  </table>

              <div class="modal-body padtrbl"id="Ajouter un Formateur">

            <div class="login-box-body">
              <p class="login-box-msg" >Ajouter un Formateur</p>
              <div class="form-group">
                <form action="/AdminDashboard/Formateur" method="POST"  id="loginForm">
                  @csrf
                  <div class="form-group has-feedback">
                    <!----- username -------------->
                    <input class="form-control" placeholder="Nom d'utilisateur" name="nom" id="loginid" type="text" autocomplete="off" value="{{old('nom')}}" required />
                    </div>
                  <div class="form-group has-feedback">
                    <!----- Email -------------->
                      <input type="email" class="form-control" name="mail" id="email" placeholder="Email" autocomplete="off" value="{{old('mail')}}" required/>
                    <!---Alredy exists  ! -->
                    @if($errors->has('mail'))
                   <h6 style="color: red;">{{ $errors->first('mail') }}</h6>
                     @endif
                  </div>
                  <div class="form-group has-feedback">
                    <!----- password -------------->
                    <input class="form-control" placeholder="mot de passe" name="mot_de_passe" id="loginpsw" type="password" autocomplete="off" required/>
                    <!---Alredy exists  ! -->
                    @if($errors->has('mot_de_passe'))
                    <h6 style="color: red;">{{ $errors->first('mot_de_passe') }}</h6>
                    @endif
                  </div>
                  <div class="form-group has-feedback">
                    <!----- Repat password -------------->
                    <input class="form-control" placeholder="Repeter votre mot de passe" name="mot_de_passe_2" id="loginpsw" type="password" autocomplete="off" required />
                   <!---Alredy exists  ! -->
                    @if($errors->has('mot_de_passe_2'))
                    <h6 style="color: red;">{{ $errors->first('mot_de_passe_2') }}</h6>
                    @endif
                    </div>
                    <div class="form-group has-feedback">
                    <SELECT name="type" size="1">
                    <OPTION>F
                    </SELECT>
                    </div>
                    </br>

<button type="submit" class="btn btn-green btn-block btn-flat">Ajouter</button>

</div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>



   <h2 class="Formateurs" id="Liste des membres">Liste des membres</h2>
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>id</th>
    <th>nom</th>
    <th>mail</th>
    <th>mot_de_passe</th>
    <th>type</th>
    <th>Delete</th>
   </tr>
   @foreach($membre as $row)
   <tr>
   <td>{{$row['id']}}</td>
    <td>{{$row['nom']}}</td>
    <td>{{$row['mail']}}</td>
    <td>{{$row['mot_de_passe']}}</td>
    <td>{{$row['type']}}</td>

    <td>
     <form   action="{{route('supprimerF',$row['id'])}}" method="POST">
       @csrf
    <button type="submit" onclick="return confirm('voulez-vous vraiment supprimer ?')" class="btn btn-danger">Supprimer</button>
     </form>
    </td>
   </tr>
   @endforeach
  </table>




