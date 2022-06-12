<?php

namespace App\Http\Controllers;
use App\Models\media;
use App\Models\quiz;
use App\Models\chapitre;
use Illuminate\Http\Request;

class QuizController extends Controller
{
 
    public function ajouterquiz(Request $request,Chapitre $chapitre,$id)
    {
        $post = new Quiz();
        $post->quiz = $request->quiz;
        $chapitre=Chapitre::find($id);
        $post->chapitre_id=$chapitre->id;
          
           if ($post->save()) {
            return redirect()->route('traiterchapitre',$id);
        }
    }
    public function traiterquiz($id,Chapitre $Quizz)
    {   
        if (session()->has('mail')){     
            $Chapitre=Chapitre::find($id);
            $media=Chapitre::find($id)->Media;
            $Quizz=Chapitre::find($id)->Quizz;
            return view('AdminF.traiterchapitre', compact('Quizz','Chapitre','media'));}
            else {return view('Front.connexion');}
     
    }
    public function   modifierquiz ($id,Request $request,Quiz $quiz){
        $nom = $request->nom;
        $update = [
        'quiz' =>$nom,];
        $id1=$request->id;
        $quiz = Quiz::find($id);
        $quiz->update($update);
        return redirect()->route('traiterchapitre',$id1);     

    }
    public function destroy($id)
    {
        $Quiz = Quiz::find($id);
        $Quiz->delete();
        return redirect()->route('AdminDashboard/cour');
    }
}
