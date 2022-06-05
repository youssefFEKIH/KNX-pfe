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
       <h2 class="Formateurs">Les Messages reçus</h2>
       <br />   
       @if(session()->has('success'))
        <div class="container">
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        </div>
    @endif 
      
      </div>
  <!--/ Navigation bar-->
  <table >
    <tr>
     <th>nom</th>
     <th>mail</th>
     <th>sujet</th>
     <th>message</th>
     <th>Répondre</th>
     <th>Supprimer</th>
   
    </tr>
    @foreach($message as $mess)
    <tr>

    <td>{{$mess->nom}}</td>
    <td>{{$mess->mail}}</td>
    <td>{{$mess->sujet}}</td>
    <td>{{$mess->message}}</td>
   
    <td>
 
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modifier{{$mess->id}}">Répondre</button>
     </td>

   

    <td>
        <form    action="{{route('supprimerM',$mess->id)}}" method="POST">
          @csrf
       <button type="submit" onclick="return confirm('voulez-vous vraiment supprimer ?')" class="btn btn-danger">Supprimer</button>
        </form>
       </td>
    </tr>
    @endforeach
   </table>

</body>







@foreach($message as $mess)


<!--Modal box-->
<div class="modal fade" id="modifier{{$mess->id}}" role="dialog">
    <div class="modal-dialog modal-sm-9">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Réponse au question de  {{$mess->nom}}</h4>
        </div>
        <div class="modal-body padtrbl">

         
            <div class="form-group">
            <form action="{{route('mail')}}" method="POST" enctype="multipart/form-data"  id="loginForm">
    @csrf 
    <div class="form-group has-feedback">
      <!----- sujet -------------->
        <input type="text" class="form-control" name="sujet" placeholder="Sujet"   required/>
      </div>
    <div class="form-group has-feedback">
      <!----- description -------------->
      <textarea  name="réponse" rows="5" cols="65" required>votre Réponse ici</textarea>
    </div>
    
     
      <!----- hidden  -------------->
    
       <input type="hidden" name="id" value="{{$mess->id}}" required>
      </div>
      <!----- hidden  -------------->
    
      <input type="hidden" name="email" value="{{$mess->mail}}" required>
      </div>

<button type="submit" class="btn btn-green btn-block btn-flat">Envoyer</button>

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
