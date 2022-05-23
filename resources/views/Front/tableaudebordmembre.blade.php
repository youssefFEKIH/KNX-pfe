
@extends('Front.layout1')

@section('content')

<section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">Mon profil</h3>

                            
                            <p></p>
                            <div class="row about-list">

                                <div class="col-md-6">
                                    <div class="media">
                                        <label>E-mail</label>
                                        <p></p>
                                    </div>
                                    <div class="media">
                                        <label>Numero Telephone</label>
                                        <p></p>
                                    </div>
                                    <div class="media">
                                        <label>Date de naissance</label>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="media">
                                        <label>Adresse</label>
                                        <p></p>
                                    </div>
                                   
                                    <div class="media">
                                        <label>Diplome</label>
                                        <p></p>
                                    </div>
                                   
                                    <div class="media">
                                        <div class="form-group">
                                            <a href="{{ route('mise') }}" class="form contact-form-button light-form-button oswald light" id="submit" placeholder="Mise à jour" > Mise à jour</a>
                                          </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="about-avatar">
                                          <img src="" title="" alt="">
                                        </div>
                                    </div>

                                </div>
                               
                            </div>
                        </div>
                    </div>
                    

                    
                   
                          

                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="" title="" alt="">
                        </div>
                    </div>
                </div>
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
