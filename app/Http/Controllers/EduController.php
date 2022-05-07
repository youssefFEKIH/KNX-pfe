<?php

namespace App\Http\Controllers;
use App\Models\Edu;
use Illuminate\Http\Request;



class EduController extends Controller
{
    public function create(Request $request)
    {
        $post = new edu();
        $post->titre_education = $request->titre_education;
        $post->lieu_education = $request->lieu_education;
        $post->desc_education = $request->desc_education;
        $post->date_education = $request->date_education;
        
     
                 
           if( $post->save()){ return redirect()->route('AdminDashboard/cv');}
         
           
    }

}
