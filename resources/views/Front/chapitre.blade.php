@extends('Front.layout')

@section('content')
 
<br>
<br>

  <h1 style="text-align:center">{{$chapitre->nom}}</h1>
  <br>
  <div style="text-align:center">
  @foreach($Quizz as $ts)
  <a href="{{route('quiz',$ts->id)}}"><button class="btn btn-danger" > {{$ts->quiz}} </button></a>
   @endforeach
   </div>
   <br>
  <div style="text-align:center">
  @foreach($media as $md)
  <div style="text-align:center">
  <video width="900"  controls> 
    	<source src="{{ asset ('video/' . $md->adresse)}}" type="video/mp4"> </video> </div>
  @endforeach
  
</div>



<br>
<br>
<br>