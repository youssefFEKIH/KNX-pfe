<?php

namespace App\Http\Controllers;
use App\Models\quiz;
use App\Models\enonce;
use Illuminate\Http\Request;

class EnonceController extends Controller
{
    public function ajouterenonce(Request $request,Quiz $Quiz,$id)
    {
        $post = new Enonce();
        $post->enonce = $request->nom;
        $Quiz=Quiz::find($id);
        $post->quiz_id=$Quiz->id;
          
           if ($post->save()) {
            return redirect()->route('traiterquiz',$id);
        }
    }
    
      public function traiterenonce($id,Quiz $Quizz)
    {   
        $Quiz=Quiz::find($id);
        $enonce=Quiz::find($id)->enonce;
        return view('AdminF.traiterquiz', compact('Quiz','enonce'));
    }
    public function   modifierenonce ($id,Request $request,Enonce $enonce){
        $nom = $request->nom;
        $update = [
        'enonce' =>$nom,];
        $id1=$request->id;
        $enonce = Enonce::find($id);
        $enonce->update($update);
        return redirect()->route('traiterquiz',$id1);     

    }
    public function destroy($id)
    {
        $Quiz = Enonce::find($id);
        $Quiz->delete();
        return redirect()->route('AdminDashboard/cour');
    }
}

