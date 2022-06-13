@extends('Front.layout')

@section('content')
 
<br>
<br>




  <h1 style="text-align:center">{{$quiz->quiz}}</h1>
  <br>
   <form method="POST" action="{{route('choix',count($enonce))}}">
   @csrf 
  @foreach($enonce as $en)
  <h4 style="color:black;">{{$en->enonce}}</h4>

  @foreach($en->choix as $choix)

    <div>
      
      <input type="radio" id="{{($choix->id)}}" name="{{$en->id}}"  >
      <label >{{$choix->choix}}</label>
    </div>
  @endforeach
  @endforeach
  <input type="submit" value="Valider"/>
</form>
<br>
<br>
<br>