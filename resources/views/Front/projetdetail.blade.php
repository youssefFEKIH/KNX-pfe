@extends('Front.layout')

@section('content')
 




<br> <br>


<h1 style="text-align:center">{{$projet->titre}}</h1>
<br>
<div style="text-align:center"><img src="{{ asset ('images/' . $projet->url_image)}}" height="400px" width="550px"></div>
<br>
<p style="color:black;">{{$projet->description}}</p>
