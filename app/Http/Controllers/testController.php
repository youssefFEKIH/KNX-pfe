<?php

namespace App\Http\Controllers;
use App\Models\cours;
use App\Models\test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function ajoutertest($id,Request $request,Cours $Cour)
    {
        $post = new Test();
        $post->nom = $request->nom;
        $Cour=Cours::find($id);
        $post->cours_id=$Cour->id;
          
           if ($post->save()) {
            return redirect()->route('afficherchapitre',$id);
        }
    }
  
    public function   modifiertest ($id,Request $request,Test $test){
        $nom = $request->nom;
        $update = [
        'nom' =>$nom,];
        $id1=$request->id;
        $test = Test::find($id);
        $test->update($update);
        return redirect()->route('afficherchapitre',$id1);     

    }
    public function destroy($id)
    {
        $Chapitre = Test::find($id);
        $Chapitre->delete();
        return redirect()->route('AdminDashboard/cour');
    }
  
}
