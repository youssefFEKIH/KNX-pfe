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
       <h2 class="Formateurs">CVs des Candidats</h2>
       <br />
      </div>
  <!--/ Navigation bar-->
  <table >
    <tr>
     <th>Id</th>
     <th>nom</th>
     <th>pays</th>
     <th>mail</th>
     <th>numero</th>
     <th>cv</th>
     <th>Supprimer</th>
    </tr>
    @foreach($Candidats as $Candidats)
    <tr>

    <td>{{$Candidats['id']}}</td>
    <td>{{$Candidats['nom']}}</td>
    <td>{{$Candidats['pays']}}</td>
    <td>{{$Candidats['mail']}}</td>
    <td>{{$Candidats['numero']}}</td>
    <td><a href="{{ asset ('images/' . $Candidats->cv)}}" >
        <img  src="{{ asset('images')}}/pdf.png" height="100" width="100" >
      </a></td>

    <td>
        <form   action="{{route('supprimerC',$Candidats->id)}}" method="POST">
          @csrf
       <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
       </td>
    </tr>
    @endforeach
   </table>

</body>
