
@extends('Front.layout')

@section('content')


    </script>

<br> <br>


<h1 style="text-align:center">{{$Courp->nom}}</h1>
<div class="a">
  <div class="b">
  <img src="{{ asset ('images/' . $Courp->url_image)}}" height="400px" width="550px"class="center">
  </div>
  <div class="b">
  <div class="time">
      <br><br>
      <h4 style="color:green">Heure de début</h4>
      <div class="timepf"><p> <img  src="{{ asset ('images/png-transparent-symbol-time-computer-icons-logo-symbol-miscellaneous-angle-logo.png')}}" alt="Suresh Dasari Card"height="22px" width="22px"> {{date('G:i', strtotime($Courp->heured))}}  -<br>{{$Courp->dated}}</p> </div>
      <h4 style="color:green">Heure de fin</h4>
      <div class="timepf"><p> <img  src="{{ asset ('images/png-transparent-symbol-time-computer-icons-logo-symbol-miscellaneous-angle-logo.png')}}" alt="Suresh Dasari Card"height="22px" width="22px"> {{date('G:i', strtotime($Courp->heuref))}}  -<br>{{$Courp->datef}}</p> </div>
      <h4 style="color:green">nombre des places réstantes</h4>
      <p>{{$Courp->nb}}</p>
     
     
      
       
      <form   action="{{route('reserver',$Courp->id)}}" method="POST">
       @csrf
       @if(session()->has('mail')&&($Courp->statut=='A venir')&&($Courp->nb!=0)&&(Auth::user()->reserve($Courp)))
       <input type="button" class="btn btn-success" disabled="disabled" value="Réserver votre place"/>
       @elseif(session()->has('mail')&&($Courp->statut=='A venir')&&($Courp->nb!=0)&&!(Auth::user()->reserve($Courp)))
    <button onclick="return confirm('voulez-vous vraiment participer à ce cour ?')" type="submit" class="btn btn-success">Réserver votre place</button>
     </form>
      @elseif(($Courp->statut=='Terminer')&&($Courp->nb!=0))
      <input type="button" class="btn btn-success" disabled="disabled" value="Réserver votre place"/>
      <p>Ce cour est expiré</p>
      @elseif((!(session()->has('mail')))&&($Courp->nb!=0))
      <input type="button" class="btn btn-success" disabled="disabled" value="Réserver votre place"/>
      <p>Vous devez être connecté à notre site pour participer à ce cour</p>
      @elseif ($Courp->nb==0)
      <input type="button" class="btn btn-success" disabled="disabled" value="Réserver votre place"/>
      <p>Cour complet</p>
      @endif
      
     
     
     
</div>

  </div>
  
</div>       

<h4 class ="courph3" >{{$Courp->resumer}}</h4>
<p class="courpp" style="color:black">{{$Courp->description}}</p>


