
@extends('Front.layout')

@section('content')

<section class="section about-section gray-bg" id="about">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
<h3 class="dark-color">Mon Profil</h3>
 <p class="titre">Bienvenu, {{session('mail')}}</p>
 <div class="login-box-body">
    <p class="login-box-msg">Si vous êtes connecté pour la première fois merci de mettre à jour vos informations personnelles</p>
        <div class="form-group">
            
            <form action="/profilC" method="POST" enctype="multipart/form-data"  id="loginForm">
            @csrf 
                <div class="form-group has-feedback">
                      <!----- Nom -------------->
                    <label style=color:black;>Nom et Prénom</br></label>
                    <input type="text" class="form-control" name="nom"  placeholder="nom" value="" required >
                </div>
            
              <div class="form-group has-feedback">
                <!----- tel -------------->
              <label style=color:black;>Numéro téléphone</br></label>
              <input type="text" class="form-control" name="tel"  placeholder="Numéro téléphone" value="" required >
              </div>

              <div class="form-group has-feedback">
            

              <div class="form-group has-feedback">
                <!----- Adresse -------------->
              <label style=color:black;>Adresse</br></label>
              <input type="text" class="form-control" name="adresse"  placeholder="Adresse" value="" required>
              </div>

              <div class="form-group has-feedback">
                <!----- Date de naissance -------------->
              <label style=color:black;>Date de naissance</br></label>
              <input type="text" class="form-control" name="date_de_naissance"  placeholder="Date de naissance" value="" required>
              </div>

              <div class="form-group has-feedback">
                <!----- description -------------->
              <label style=color:black;>Déscription</br></label>
              <textarea type="text" class="form-control" name="description"  placeholder="Déscription" value="" required ></textarea>
              </div>

                <div class="form-group has-feedback">
                        <!----- image -------------->
                <label style=color:black;>Ajouter une photo de profil</br></label>
                    <input type="file" name="url_image" value="" required>
                </div>            
                      
    <button type="submit" class="btn btn-green btn-block btn-flat">Modifier</button>        

     </form>
</div>
</section>
@endsection