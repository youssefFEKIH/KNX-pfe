<?php

namespace App\Http\Controllers;
use App\Models\test;
use App\Models\chapitre;
use Illuminate\Http\Request;
use App\Models\Cours;

class ChapitreController extends Controller
{
    public function ajouterchapitre($id,Request $request,Cours $Cour)
    {
        $post = new Chapitre();
        $post->nom = $request->nom;
        $Cour=Cours::find($id);
        $post->cours_id=$Cour->id;
          
           if ($post->save()) {
            return redirect()->route('afficherchapitre',$id);
        }
    }
    public function traitercours($id,Cours $Cours)
    {   
        $Cours=Cours::find($id);
        $Cour=Cours::find($id)->chapitres;
        $Test=Cours::find($id)->tests;
        return view('AdminF.traitercour', compact('Cour','Test','Cours'));
    }
    public function   modifierchapitre ($id,Request $request,Chapitre $chapitre){
        $nom = $request->nom;
        $update = [
        'nom' =>$nom,];
        $id1=$request->id;
        $chapitre = Chapitre::find($id);
        $chapitre->update($update);
        return redirect()->route('afficherchapitre',$id1);     

    }
    public function destroy($id)
    {
        $Chapitre = Chapitre::find($id);
        $Chapitre->delete();
        return redirect()->route('AdminDashboard/cour');
    }
  
}
