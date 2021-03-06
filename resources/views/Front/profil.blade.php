@extends('Front.layout')

@section('content')
@foreach($membre as $membres)

<p class="titre">Bienvenu, {{session('mail')}}</p>
<p class="login-box-msg">Si vous êtes connecté pour la première fois merci de mettre à jour vos informations personnelles</p>

<section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            
               
                          

                        
                            <h3 class="dark-color">Mon profil</h3>
                           
                            <p>{{$membres->description}}</p>

                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                    <label>Nom </label>
                                    <h5>{{$membres->nom}}</h5>
                                    </div>
                                    <div class="media">
                                    <label>telephone</label>
                                        
                                        <h5>{{$membres->tel}}</h5>

                                    </div>
                                    <div class="media">
                                    <label>date de naissance</label>
                                       
                                        <h5>{{$membres->date_de_naissance}}</h5>

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                    <label>adresse</label>
                                        
                                        <h5>{{$membres->adresse}}</h5>

                                    </div>
                                    <div class="media">

                                        
                                        <h5>{{$membres->diplome}}</h5>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </br> </br> </br>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="{{ asset ('images/' . $membres->url_image)}}" title="" alt=""height="400px" width="400px" >
                        </div>

                    </div>
                   
                   
                </div>
                @endforeach
                <br>
             <button type="submit" class="btn btn-green btn-block btn-flat" data-toggle="modal" data-target="#modifier">Modifier</button> 
                <br> 
         
        </section>

        @foreach($membre as $membres)
        <!--Modal box-->
<div class="modal fade" id="modifier" role="dialog">
    <div class="modal-dialog modal-sm-9">

      <!-- Modal content no 1-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Modifier vos données</h4>
        </div>
        <div class="modal-body padtrbl">
        <div class="form-group">
        <form action="/profilC" method="POST" enctype="multipart/form-data"  id="loginForm">
            @csrf 
                <div class="form-group has-feedback">
                 <!----- Nom -------------->
                <label style=color:black;>Nom et Prénom</br></label>
                <input type="text" class="form-control" name="nom"  placeholder="nom"  value="{{$membres->nom}}" required >
                </div>
            
              <div class="form-group has-feedback">
                <!----- tel -------------->
              <label style=color:black;>Numéro téléphone</br></label>
              <input type="number" class="form-control" name="tel"  placeholder="Numéro téléphone" value="{{$membres->tel}}"  required >
              </div>

              <div class="form-group has-feedback">
            

              <div class="form-group has-feedback">
                <!----- Adresse -------------->
              <label style=color:black;>Adresse</br></label>
              <input type="text" class="form-control" name="adresse"  placeholder="Adresse" value="{{$membres->adresse}}" required>
              </div>

              <div class="form-group has-feedback">
                <!----- Date de naissance -------------->
              <label style=color:black;>Date de naissance</br></label>
              <input type="date" class="form-control" name="date_de_naissance"  placeholder="Date de naissance" value="{{$membres->date_de_naissance}}" required>
              </div>

              <div class="form-group has-feedback">
                <!----- description -------------->
              <label style=color:black;>Déscription</br></label>
              <textarea type="text" class="form-control" name="description"  placeholder="Déscription" value="{{$membres->description}}" required ></textarea>
              </div>

                <div class="form-group has-feedback">
                        <!----- image -------------->
                <label style=color:black;>Ajouter une photo de profil</br></label>
                    <input type="file" name="url_image" value="" required>
                </div>   
                <!----- hidden-------------->
                   
                    <input type="hidden" name="id" required>
                </div>           
                      
    <button type="submit" class="btn btn-green btn-block btn-flat">Modifier</button>        

     </form>   

    </div>
  </div>
</div>
  </div>
  </div>
  <!--/ Modal box-->
  @endforeach
  @endsection
