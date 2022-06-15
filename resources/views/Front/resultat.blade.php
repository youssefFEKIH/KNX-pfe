@extends('Front.layout')

@section('content')




<p class="titre">Bonjour, {{session('mail')}}</p>
@if(session()->has('success'))
        <div class="container">
            <div class="alert alert-success">
                {{ session()->get('success') }}{{$score}}%
            </div>
        </div>
    @endif 
    @if(session()->has('erreur'))
        <div class="container">
            <div class="alert alert-danger">
                {{ session()->get('erreur') }}{{$score}}%
            </div>
        </div>
    @endif 


@endsection