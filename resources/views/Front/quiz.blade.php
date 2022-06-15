@extends('Front.layout')

@section('content')
 
<br>
<br>




  <h1 style="text-align:center">{{$quiz->quiz}}</h1>

  <br>
  <div style="margin-left:3%;">
   <form method="POST" action="{{route('choix',count($enonce))}}">
   @csrf 
  @foreach($enonce as $en)
  <h5 style="color:black;">{{$en->enonce}}</h5>

  @foreach($en->choix as $choix)

    <div>
      
      <input type="radio" id="{{($choix->id)}}" name="{{$en->id}}" value="{{$choix->id}}"  >
      <label class="choix"> <p>{{$choix->choix}}</p></label>
    </div>
  @endforeach
  @endforeach
  <input type="submit"class="btn btn-success" value="Valider"/>
</form>
</div>
<br>
<br>
<br>