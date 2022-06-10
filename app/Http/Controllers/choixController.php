<?php

namespace App\Http\Controllers;

use App\Models\choix;
use Illuminate\Http\Request;

class ChoixController extends Controller
{
    public function ajouterchoix(Request $request)
    {
        $post = new Choix();
        $post->choix = $request->nom;
          
           if ($post->save()) {
            return redirect()->route('AdminDashboard/cour');
        }
    }
}
