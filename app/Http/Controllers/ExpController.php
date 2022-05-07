<?php

namespace App\Http\Controllers;
use App\Models\Exp;
use Illuminate\Http\Request;

class ExpController extends Controller
{
    public function create(Request $request)
    {
        $post = new exp();
        $post->titre_experience = $request->titre_experience;
        $post->lieu_experience = $request->lieu_experience;
        $post->desc_experience = $request->desc_experience;
        $post->date_experience = $request->date_experience;
        
     
                 
           if( $post->save()){ return redirect()->route('AdminDashboard/cv');}
         
           
    }
}
