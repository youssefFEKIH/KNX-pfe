<?php

namespace App\Http\Controllers;

use App\Models\test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function ajoutertest(Request $request)
    {
        $post = new Test();
        $post->nom = $request->nom;
          
           if ($post->save()) {
            return redirect()->route('AdminDashboard/cour');
        }
    }
}
