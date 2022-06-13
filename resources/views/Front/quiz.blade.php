@extends('Front.layout')

@section('content')
 
<br>
<br>




  <h1 style="text-align:center">{{$quiz->quiz}}</h1>
  <br>
   
  @foreach($enonce as $en)
  <h3>{{$en->enonce}}</h3>

  @foreach($c as $ch)
<h3>{{$ch->id}}</h3>
  @endforeach
  @endforeach

<br>
<br>
<br>