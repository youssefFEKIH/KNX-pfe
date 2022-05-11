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
    <th>Id</th>
    <th>image</th>
    <th>Titre</th>
    <th>Description</th> 
    <th>Supprimer</th>
   </tr>
  
   <tr>
   <td></td>
   <td><img src="" width="200px;" heigh="200px;" ></td>
    <td></td>
    <td></td>
      
    <td>
     <form   action="" method="POST">
    
    <button type="submit" class="btn btn-danger">Supprimer</button>
     </form>
    </td>
   </tr>

  </table>
  
  <div class="modal-body padtrbl">
</br>
</br>
<div class="login-box-body">
  <p class="login-box-msg">Ajouter vos coordonnées </p>
  <div class="form-group">
    <form action="/AdminDashboard/cv" method="POST" enctype="multipart/form-data"  id="loginForm">
      @csrf 
      <div class="form-group has-feedback">
        <!----- nom -------------->
          <input type="text" class="form-control" name="nom"  placeholder=" nom" autocomplete="off" required/>
        </div>
        <div class="form-group has-feedback">
        <!----- prénom -------------->
          <input type="text" class="form-control" name="prenom"  placeholder=" prénom" autocomplete="off" required/>
        </div>

        <div class="form-group has-feedback">
        <!----- prénom -------------->
          <input type="text" class="form-control" name="adresse"  placeholder="adresse" autocomplete="off" required/>
        </div>
      		
        <div class="form-group has-feedback">
        <!----- prénom -------------->
          <input type="Email" class="form-control" name="mail"  placeholder="mail" autocomplete="off" required/>
        </div>
        <div class="form-group has-feedback">
        <!----- prénom -------------->
          <input type="text" class="form-control" name="numero"  placeholder="numero_tel" autocomplete="off" required/>
        </div>
        
      <div class="form-group has-feedback">
        <!----- description -------------->
        <textarea placeholder="description à propos" class="form-control" name="description" rows="5" cols="155"  required></textarea>
      </div>
      <div class="form-group has-feedback">
        <!----- prénom -------------->
          <input type="text" class="form-control" name="fb"  placeholder="lien facebook" autocomplete="off" required/>
        </div>
        
        <div class="form-group has-feedback">
        <!----- prénom -------------->
          <input type="text" class="form-control" name="linkedin"  placeholder="lien linkedin" autocomplete="off" required/>
          </div>
     <div class="form-group has-feedback">
        <!----- description -------------->
        <textarea placeholder="vos compétance" class="form-control" name="competence" rows="5" cols="155"  required></textarea>
      </div>
      <div class="form-group has-feedback">
        <!----- description -------------->
        <textarea placeholder="votre centre d'interet" class="form-control" name="interet" rows="5" cols="155"  required></textarea>
      </div>

     
       <div class="form-group has-feedback">
        <!----- image -------------->
        <label style=color:black;>Ajouter une photo de projet</br></label>
         <input type="file" name="image"  required>
        </div>
      

<button type="submit" class="btn btn-green btn-block btn-flat">Ajouter</button>

</div>
      </div>
    </form>


</br>
<p class="login-box-msg">Ajouter votre experience</p>

<div class="modal-body padtrbl">

<div class="login-box-body">
  <div class="form-group">
  <form action="/AdminDashboard/Exp" method="POST" enctype="multipart/form-data"  id="loginForm">
  @csrf 
          <div class="form-group has-feedback">
        <!----- prénom -------------->
          <input type="text" class="form-control" name="titre_experience"  placeholder="titre-experience" autocomplete="off" required/>
          </div>
          <div class="form-group has-feedback">
        <!----- prénom -------------->
          <input type="text" class="form-control" name="lieu_experience"  placeholder="lieu-experience" autocomplete="off" required/>
          </div>

          <div class="form-group has-feedback">
        <!----- prénom -------------->
          <input type="text" class="form-control" name="date_experience"  placeholder="date-experience" autocomplete="off" required/>
          </div>
        <!----- description -------------->
        <textarea placeholder="descreption-experience" class="form-control" name="desc_experience" rows="5" cols="155"  required></textarea>
      </div>
      </div>
      <button type="submit" class="btn btn-green btn-block btn-flat">Ajouter</button>
      </div>
      </div>
    </form>
  </div>
</div>

</br>
<p class="login-box-msg">Ajouter votre education</p>

<div class="modal-body padtrbl">

<div class="login-box-body">
  <div class="form-group">
  <form action="/AdminDashboard/Edu" method="POST" enctype="multipart/form-data"  id="loginForm">
  @csrf 
          <div class="form-group has-feedback">
        <!----- prénom -------------->
          <input type="text" class="form-control" name="titre_education"  placeholder="titre-education" autocomplete="off" required/>
          </div>
          <div class="form-group has-feedback">
        <!----- prénom -------------->
          <input type="text" class="form-control" name="lieu_education"  placeholder="lieu-education" autocomplete="off" required/>
          </div>

          <div class="form-group has-feedback">
        <!----- prénom -------------->
          <input type="text" class="form-control" name="date_education"  placeholder="date-education" autocomplete="off" required/>
          </div>
        <!----- description -------------->
        <textarea placeholder="descreption-education" class="form-control" name="desc_education" rows="5" cols="155"  required></textarea>
      </div>
      </div>
      <button type="submit" class="btn btn-green btn-block btn-flat">Ajouter</button>
      </div>
      </div>
    </form>
  </div>
</div>

</br>
<p class="login-box-msg">Ajouter vos certificats</p>

<div class="modal-body padtrbl">

<div class="login-box-body">
  <div class="form-group">
  <form action="/AdminDashboard/Crt" method="POST" enctype="multipart/form-data"  id="loginForm">
  @csrf 
          <div class="form-group has-feedback">
        <!----- prénom -------------->
          <input type="text" class="form-control" name="certif"  placeholder="vos certificats" autocomplete="off" required/>
          </div>
        </div>
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
