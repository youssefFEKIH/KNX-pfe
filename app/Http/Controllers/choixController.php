<?php

namespace App\Http\Controllers;
use App\Models\enonce;
use App\Models\choix;
use Illuminate\Http\Request;

class ChoixController extends Controller
{
    public function ajouterchoix(Request $request,Enonce $Enonce,$id)
    {
        $post = new Choix();
        $post->choix = $request->nom;
        $post->type = $request->type;
        $Enonce=Enonce::find($id);
        $post->enonce_id=$Enonce->id;
          
           if ($post->save()) {
            return redirect()->route('traiterenonce',$id);
        }
    }
     public function traiterchoix($id,Enonce $Enonce)
    {   
        $Enonce=Enonce::find($id);
        $choix=Enonce::find($id)->choix;
        return view('AdminF.traiterenonce', compact('Enonce','choix'));
    }
    public function   modifierchoix($id,Request $request,Choix $choix){
        $nom = $request->nom;
        $type = $request->type;
        $update = [
        'type' =>$type,
        'choix'=>$nom,
        ];
        $id1=$request->id;
        $choix = Choix::find($id);
        $choix->update($update);
        return redirect()->route('traiterenonce',$id1);     

    }
    public function destroy($id)
    {
        $Quiz = Choix::find($id);
        $Quiz->delete();
        return redirect()->route('AdminDashboard/cour');
    }
}
