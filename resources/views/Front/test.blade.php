@extends('Front.layout')

@section('content')
 
<br>
<br>




  <h1 style="text-align:center">{{$test->nom}}</h1>

  <br>
  <div style="margin-left:3%;">
   <form method="POST" action="{{route('reponse',count($question))}}">
   @csrf 
  @foreach($question as $qs)
  <h5 style="color:black;">{{$qs->question}}</h5>

  @foreach($qs->reponses as $reponse)

    <div>
      
      <input type="radio" id="{{($reponse->id)}}" name="{{$qs->id}}" value="{{$reponse->id}}"  >
      <label class="choix"> <p>{{$reponse->contenu}}</p></label>
    </div>
  @endforeach
  @endforeach
  <input type="submit"class="btn btn-success" value="Valider"/>
</form>
</div>
<br>
<br>
<br>