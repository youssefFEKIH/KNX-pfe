@extends('Front.layout')
@section('content')
 
 <!-- Modal content no 1-->
 <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title text-center form-title">Connexion</h4>
        </div>
        <div class="modal-body padtrbl">

          <div class="login-box-body">
            <p class="login-box-msg">Connectez-vous pour démarrer votre session</p>
            <div class="form-group">
              <form name="" action="/home/connect" method="POST" id="loginForm">
                @csrf 
                <div class="form-group has-feedback">
                  <!----- mail -------------->
                  <input class="form-control"  placeholder="Email" name="mail" id="loginid" type="Email" autocomplete="off" value="{{old('mail')}}" required/>
                  </div>
                <div class="form-group has-feedback">
                  <!----- password -------------->
                  <input class="form-control" name="mot_de_passe"  placeholder="mot de passe" id="loginpsw" type="password" autocomplete="off" required />
                  @if($errors->has('mot_de_passe'))
                    <h6 style="color: red;">{{ $errors->first('mot_de_passe') }}</h6>
                    @endif  
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="checkbox icheck">
                      <label>
                                <input type="checkbox" id="loginrem" > Remember Me
                              </label>
                    </div>
                  </div>
                  <div class="col-xs-12">
                    <button type="submit" class="btn btn-green btn-block btn-flat" >Connexion</button>
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

 @endsection