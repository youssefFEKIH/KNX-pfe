@extends('Front.layout')

@section('content')
 




<br> <br>


<h1 style="text-align:center">{{$Courp->nom}}</h1>
<div class="a">
  <div class="b">
  <img src="{{ asset ('images/' . $Courp->url_image)}}" height="400px" width="550px"class="center">
  </div>

     
     
       
      <form   action="" method="POST">
      <br>
     <br>
        <br>
        <br>
       @csrf
       @if(session()->has('mail'))
      
    <button type="submit" class="btn btn-success">Commencez maintenant</button>
     </form>
     @elseif(!(session()->has('mail')))
      <input type="button" class="btn btn-success" disabled="disabled" value="Commencez maintenant"/>
      <p>Vous devez être connecté à notre <br> site pour participer à ce cour</p>
     
      @endif
      
     
     
     
</div>

  </div>
  
</div>       


<p class="courpp" style="color:black">{{$Courp->description}}</p>


