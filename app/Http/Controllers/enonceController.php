<?php

namespace App\Http\Controllers;

use App\Models\enonce;
use Illuminate\Http\Request;

class EnonceController extends Controller
{
    public function ajouterenonce(Request $request)
    {
        $post = new Enonce();
        $post->enonce = $request->nom;
          
           if ($post->save()) {
            return redirect()->route('AdminDashboard/cour');
        }
    }
}

