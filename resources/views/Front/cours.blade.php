@extends('Front.layout')

@section('content')
 

   

<br><br><br>
     
<div id="main-content"><section class="content-area">
<div class="top_heading_out">
<div class="top_site_main" ></span>	<div class="page-title-wrapper">
</div>
</div>		
<div class="breadcrumbs-wrapper">
</div>
</div>
<div class="container site-content"><div class="row"><main id="main" class="site-main col-sm-12 full-width">
<div class="list-tab-event">
<ul class="nav nav-tabs">
<li class="active"><a href="#tab-happening" data-toggle="tab"><h4>A venir</h4></a></li>				<li><a href="#tab-upcoming" data-toggle="tab"><h4>Terminer</h4></a></li>						        </ul>
<div class="tab-content thim-list-event">
<div role="tabpanel" class="tab-pane fade in active" id="tab-happening">		
  <br>

	<div class="item-event post-17683 tp_event type-tp_event status-publish has-post-thumbnail hentry">
  @foreach($Courp as $courp)
  @if($courp->statut == 'A venir')

  <div class="time-from">

  <div class="card" >
            <div class="row">
       
             <div class="col-sm-2">
              <div class="date"> {{$courp->dated}} </div>
                </div>
                <div class="col-sm-7">
                    <h5 class="titrep">{{$courp->nom}}</h5>
                   <div><p> <img  src="{{ asset ('images/png-transparent-symbol-time-computer-icons-logo-symbol-miscellaneous-angle-logo.png')}}" alt="Suresh Dasari Card"height="25px" width="25px"> {{date('G:i', strtotime($courp->heured))}}-{{date('G:i', strtotime($courp->heuref))}} </p> </div>
                    <p class="card-text">{{$courp->description}} </p></div>
                    <div style="text-align: right"><img  src="{{ asset ('images/' . $courp->url_image)}}" alt="Suresh Dasari Card"height="100px" width="200px"> </div>
                                
                </div>            
              
            
        </div>
    </div>

    <hr />
    @endif                            
	@endforeach
</div>

			
	
	
</div>
<div role="tabpanel" class="tab-pane fade" id="tab-upcoming">
	<div class="item-event post-17684 tp_event type-tp_event status-publish has-post-thumbnail hentry">
	<div class="time-from">
  <div class="container bcontent">
        
  @foreach($Courp as $courp)
  @if($courp->statut == 'Terminer')

  <div class="time-from">

  <div class="card" >
            <div class="row">
       
             <div class="col-sm-2">
              <div class="date"> {{$courp->dated}} </div>
                </div>
                <div class="col-sm-7">
                    <h5 class="titrep">{{$courp->nom}}</h5>
                   <div ><p > <img  src="{{ asset ('images/png-transparent-symbol-time-computer-icons-logo-symbol-miscellaneous-angle-logo.png')}}" alt="Suresh Dasari Card"height="25px" width="25px"><p class="timep"> {{date('G:i', strtotime($courp->heured))}}-{{date('G:i', strtotime($courp->heuref))}}</p> </p> </div>
                    <p class="card-text">{{$courp->description}} </p></div>
                    <div style="text-align: right"><img  src="{{ asset ('images/' . $courp->url_image)}}" alt="Suresh Dasari Card"height="100px" width="200px"> </div>
                                
                </div>            
              
            
        </div>
    </div>

    <hr />
    @endif                            
	@endforeach


</div>	
</div>
</div></div></div></div></div></div>

		



<br><br><br><br><br><br><br>

  @endsection





