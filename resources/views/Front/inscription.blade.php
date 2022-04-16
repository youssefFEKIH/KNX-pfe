@extends('Front.layout')
@section('content')
 
<div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title text-center form-title">S'inscrire</h4>
          </div>
          <div class="modal-body padtrbl">

            <div class="login-box-body">
              <p class="login-box-msg">Enregistrer un nouveau compte</p>
              <div class="form-group">
                <form action="" method="POST"  id="loginForm">
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

                    <div class="col-xs-12">
                      <button type="submit" class="btn btn-green btn-block btn-flat" >S'inscrire</button>
                    </div>
                    <p class="link-bottom"> Êtes vous membre?  <a href="#" data-target="#login" data-dismiss="modal" data-toggle="modal">Connexion</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!--/ Modal box-->

 @endsection