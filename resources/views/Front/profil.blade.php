@extends('Front.layout')

@section('content')

<section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">Mon profil</h3>
                            @foreach($membre as $membre)

                            <p>{{$membre->description}}</p>

                            <div class="row about-list">
                                <div class="col-md-6">
                                    <div class="media">
                                    <label>Nom </label>
                                    <h5>{{$membre->nom}}</h5>
                                    </div>
                                    <div class="media">
                                    <label>telephone</label>
                                        
                                        <h5>{{$membre->tel}}</h5>

                                    </div>
                                    <div class="media">
                                    <label>date de naissance</label>
                                       
                                        <h5>{{$membre->date_de_naissance}}</h5>

                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                    <label>adresse</label>
                                        
                                        <h5>{{$membre->adresse}}</h5>

                                    </div>
                                    <div class="media">

                                        
                                        <h5>{{$membre->diplome}}</h5>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </br> </br> </br>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="{{ asset ('images/' . $membre->url_image)}}" title="" alt="">
                        </div>

                    </div>
                   
                   
                </div>
                @endforeach
                <br>
                <a href="{{route('profilA')}}"><button type="submit" class="btn btn-green btn-block btn-flat">Modifier</button> </a>
                <br> 
                <div class="counter">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                                <p class="m-0px font-w-600">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                                <p class="m-0px font-w-600">Project Completed</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                                <p class="m-0px font-w-600">Photo Capture</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                                <p class="m-0px font-w-600">Telephonic Talk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

  @endsection
