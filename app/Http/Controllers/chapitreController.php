<?php

namespace App\Http\Controllers;

use App\Models\chapitre;
use Illuminate\Http\Request;

class ChapitreController extends Controller
{
    public function ajouterchapitre(Request $request)
    {
        $post = new Chapitre();
        $post->nom = $request->nom;
          
           if ($post->save()) {
            return redirect()->route('AdminDashboard/cour');
        }
    }
}
