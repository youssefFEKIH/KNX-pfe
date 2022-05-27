
@extends('Front.layout1')

@section('content')

<section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                   
                    
<div class="login-box-body">
    <p class="login-box-msg">Ajouter des informations personnels</p>
        <div class="form-group">
            
            <form action="profilC" method="POST" enctype="multipart/form-data"  id="loginForm">
            @csrf 
                <div class="form-group has-feedback">
                      <!----- Nom -------------->
                    <label style=color:black;>Nom et Prénom</br></label>
                    <input type="text" class="form-control" name="nom"  placeholder="nom" value="" >
                </div>
            
              <div class="form-group has-feedback">
                <!----- tel -------------->
              <label style=color:black;>Numéro téléphone</br></label>
              <input type="text" class="form-control" name="tel"  placeholder="Numéro téléphone" value="" >
              </div>

              <div class="form-group has-feedback">
                <!----- diplome -------------->
              <label style=color:black;>Diplome</br></label>
              <input type="text" class="form-control" name="diplome"  placeholder="Diplome" value="" >
              </div>

              <div class="form-group has-feedback">
                <!----- Adresse -------------->
              <label style=color:black;>Adresse</br></label>
              <input type="text" class="form-control" name="adresse"  placeholder="Adresse" value="" >
              </div>

              <div class="form-group has-feedback">
                <!----- Date de naissance -------------->
              <label style=color:black;>Date de naissance</br></label>
              <input type="text" class="form-control" name="date_de_naissance"  placeholder="Date de naissance" value="" >
              </div>

              <div class="form-group has-feedback">
                <!----- description -------------->
              <label style=color:black;>Déscription</br></label>
              <textarea type="text" class="form-control" name="description"  placeholder="Déscription" value="" ></textarea>
              </div>

                <div class="form-group has-feedback">
                        <!----- image -------------->
                <label style=color:black;>Ajouter une photo de profil</br></label>
                    <input type="file" name="url_image" value="" >
                </div>            
                      
    <button type="submit" class="btn btn-green btn-block btn-flat">Enregistre</button>        


            </form>
</div>
                   
                      
                       
                          

                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="" title="" alt="">
                        </div>
                    </div>
                </div>
                <div class="counter">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                                <p class="m-0px font-w-600">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                                <p class="m-0px font-w-600">Project Completed</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                                <p class="m-0px font-w-600">Photo Capture</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                                <p class="m-0px font-w-600">Telephonic Talk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  @endsection
