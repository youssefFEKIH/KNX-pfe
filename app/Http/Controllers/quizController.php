<?php

namespace App\Http\Controllers;

use App\Models\quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function ajouterquiz(Request $request)
    {
        $post = new Quiz();
        $post->quiz = $request->nom;
          
           if ($post->save()) {
            return redirect()->route('AdminDashboard/cour');
        }
    }
}
