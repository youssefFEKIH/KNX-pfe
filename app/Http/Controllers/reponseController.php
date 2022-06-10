<?php

namespace App\Http\Controllers;

use App\Models\reponse;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    public function ajouterreponse(Request $request)
    {
        $post = new Reponse();
        $post->contenu = $request->nom;
          
           if ($post->save()) {
            return redirect()->route('AdminDashboard/cour');
        }
    }
}
