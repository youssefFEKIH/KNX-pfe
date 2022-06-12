<?php

namespace App\Http\Controllers;
use App\Models\question;
use App\Models\reponse;
use Illuminate\Http\Request;

class ReponseController extends Controller
{
    public function ajouterreponse($id,Request $request,Question $Question)
    {
        $post = new Reponse();
        $post->contenu = $request->nom;
        $Question=Question::find($id);
        $post->question_id=$Question->id;
          
           if ($post->save()) {
            return redirect()->route('traiterquestion',$id);
        }
    }
    public function traiterreponse($id,Question $Question)
    {   
        $Question=Question::find($id);
        $reponse=Question::find($id)->reponses;
        return view('AdminF.traiterquestion', compact('reponse','Question'));
    }
  
    public function   modifierreponse ($id,Request $request,Reponse $reponse){
        $nom = $request->nom;
        $update = [
        'contenu' =>$nom,];
        $id1=$request->id;
        $reponse = Reponse::find($id);
        $reponse->update($update);
        return redirect()->route('traiterquestion',$id1);     

    }
    public function destroy($id)
    {
        $Chapitre = Reponse::find($id);
        $Chapitre->delete();
        return redirect()->route('AdminDashboard/cour');
    }
}
