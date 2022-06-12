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
   <h2 class="Formateurs">  Cour Presentiel </h2> 

   <div class="text-center"><a href="#Ajouter un cour"><button  type="button" class="btn btn-warning">Ajouter un cour</button></a>
  </div>  </div>  <br />
  <table >
   <tr>
    <th>Id</th>
    <th>image</th>
    <th>Titre</th>
    <th>Résumer</th>
    <th>statut</th>
    <th>NB places</th>
    <th>date de début</th>
    <th>heure de début</th>
    <th>heure de fin</th>
    <th>Supprimer</th>
    <th>Modifier</th>
    <th>Terminer</th>
    <th>Liste des participants</th>
   </tr>
@foreach($Cour as $Cours)
   <tr>
   <td>{{$Cours->id}}</td>
   <td><img src="{{ asset ('images/' . $Cours->url_image)}}" height="100px" width="100px"  ></td>
    <td>{{$Cours->nom}}</td>
    <td>{{$Cours->resumer}}</td>
    <td>{{$Cours->statut}}</td>
    <td>{{$Cours->nb}}</td>
    <td>{{$Cours->dated}}</td>
    <td>{{date('G:i', strtotime($Cours->heured))}}</td>
  
    <td>{{date('G:i', strtotime($Cours->heuref))}}</td>
  
    <td>
     <form   action="{{route('supprimerCourp',$Cours->id)}}" method="POST">
       @csrf
    <button onclick="return confirm('voulez-vous vraiment supprimer ?')" type="submit" class="btn btn-danger">Supprimer</button>
     </form></td><td>
     
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modifier{{$Cours->id}}">Modifier</button>
  </td><td>
     <form   action="{{route('terminer',$Cours->id)}}" method="POST">
       @csrf
    <button type="submit" class="btn btn-success">Terminer</button>
     </form></td>
    </td>
    <td>
     
    <a href="{{route('liste',$Cours->id)}}"><button type="button" class="btn btn-info" >Liste des participants</button></a>
  </td>
    
   </tr>
   @endforeach
  </table>

  @foreach($Cour as $Cours)

<!--Modal box-->
<div class="modal fade" id="modifier{{$Cours->id}}" role="dialog">
    <div class="modal-dialog modal-sm-9">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Modifier cour Presentiel</h4>
        </div>
        <div class="modal-body padtrbl">

         
            <div class="form-group">
              <form action="{{route('ModifierCourp',$Cours->id)}}" method="POST" enctype="multipart/form-data" id="loginForm">
                @csrf
                <div class="form-group has-feedback">
                  <!----- mail -------------->
                  <input type="text" class="form-control" name="nom"  placeholder="Titre" value="{{$Cours->nom}}"  required/>
                  </div>
                  <div class="form-group has-feedback">
                  <!----- mail -------------->
                  <input type="text" class="form-control" name="resumer" value="{{$Cours->resumer}}" placeholder="résumer" required/> 
             </div>
                  </div>
                  <div class="form-group has-feedback">
                  <!----- mail -------------->
                  <textarea  name="description" rows="5" cols="65" placeholder="description détaillée " required>{{$Cours->description}}  </textarea>
                  </div>

                  <div class="form-group has-feedback">
                  <!----- mail -------------->
                  <input type="number"  name="nb" value="{{$Cours->nb}}" placeholder="nombres des places" required/> 
               </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  
                  <label style=color:black;>date de début</label>
      <input Type="date" name="dated" rows="5" cols="155" placeholder="date de début " value="{{$Cours->dated}}"required/> 
      <label style=color:black;>heure début</label>
      <input type="time" name="heured" value="{{$Cours->heured}}">
      <label style=color:black;>date de fin</label>
      <input Type="date" name="datef" rows="5" cols="155" placeholder="date de fin " value="{{$Cours->datef}}" required/> 
      <label style=color:black;>heure de fin </label>
      <input type="time" name="heuref" value="{{$Cours->heuref}}"> </div>
      <div class="form-group has-feedback">
                  <select name="statut" value="{{$Cours->statut}}"> 
            <option  selected>A venir</option>
            <option  selected>Terminer</option>
        </select>
     </div>
     <div class="form-group has-feedback">
        <!----- hidden id -------------->
     
         <input type="hidden" name="id" value="{{$Cours->id}}" >
        </div>
     <div class="form-group has-feedback">
     <label style=color:black;>Ajouter une photo de cour</br></label>  </div>
         <input type="file" name="url_image" accept=".png, .jpg, .jpeg" enctype="multipart/form-data" required>
         <img src="{{ asset ('images/' . $Cours->url_image)}}" height="100px" width="100px"  >
               
                    <button type="submit" class="btn btn-green btn-block btn-flat" >Modifier</button>
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







  <div class="modal-body padtrbl">
</br>
</br>
<div class="login-box-body">
  <p class="login-box-msg" id="Ajouter un cour">Ajouter un cour</p>
  <div class="form-group">
    <form action="/Formateur/courp" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf

      
        <!----- Titre -------------->
          <input type="text" class="form-control" name="nom"  placeholder="Titre"  required/>
        </div>


      <div class="form-group has-feedback">
      <!----- résumer -------------->
        <input type="text" class="form-control" name="resumer"  placeholder="résumer" required/> 
      </div>
      <!----- déscription  -------------->
      <textarea  name="description" rows="5" cols="155" placeholder="description détaillée " required> </textarea>
      </div>
      <div class="form-group has-feedback">
                  <!----- mail -------------->
                  <input type="number"  name="nb" placeholder="nombres des places" required/> 
               </div>

      <!----- date   -------------->
      <label style=color:black;>date de début</label>
      <input Type="date" name="dated" rows="5" cols="155" placeholder="date de début " required/> 
      <label style=color:black;>heure début</label>
      <input type="time" name="heured">
      <label style=color:black;>date de fin</label>
      <input Type="date" name="datef" rows="5" cols="155" placeholder="date de fin " required/> 
      <label style=color:black;>heure de fin </label>
      <input type="time" name="heuref">
      </div>

      <div >
        <label style=color:black; >Type de cour:</label></br>
        <!----- Type -------------->
        <select name="statut"> 
            <option  selected>A venir</option>
           
        </select>
     </div>
    
       <div class="form-group has-feedback">
        <!----- image -------------->
        <label style=color:black;>Ajouter une photo de cour</br></label>
         <input type="file" name="url_image" accept=".png, .jpg, .jpeg" required>
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
<script src="{{ asset('Front/js')}}/jquery.min.js"></script>
  <script src="{{ asset('Front/js')}}/jquery.easing.min.js"></script>
  <script src="{{ asset('Front/js')}}/bootstrap.min.js"></script>
  <script src="{{ asset('Front/js')}}/custom.js"></script>
  <script src="{{ asset('Front/contactform')}}/contactform.js"></script>