<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function ajouterquestion(Request $request)
    {
        $post = new Question();
        $post->question = $request->nom;
          
           if ($post->save()) {
            return redirect()->route('AdminDashboard/cour');
        }
    }
}
