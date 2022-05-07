<?php

namespace App\Http\Controllers;
use App\Models\Crt;
use Illuminate\Http\Request;

class CrtController extends Controller
{
    public function create(Request $request)
    {
        $post = new crt();
        $post->certif = $request->certif;
  
        
     
                 
           if( $post->save()){ return redirect()->route('AdminDashboard/cv');}
         
           
    }
}
