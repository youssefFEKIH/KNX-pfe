@extends('Front.layout')

@section('content')
 
<br>
<br>




  <h1 style="text-align:center">{{$Cours->nom}}</h1>
  <br>
  <div style="text-align:center">
  @foreach($chapitre as $Ch)
  <a href="{{route('chapitre',$Ch->id)}}"><button class="btn btn-success" > {{$Ch->nom}} </button></a>
  @endforeach
  @foreach($Test as $ts)
  <a href=""><button class="btn btn-danger" > {{$ts->nom}} </button></a>
   @endforeach
</div>
<br>
<div style="text-align:center">
  <img src="{{ asset ('images/' . $Cours->url_image)}}" height="400px" width="550px">
  </div>
  <br>
  <p style="color:black" >{{$Cours->description}}</p>

<br>
<br>
<br>