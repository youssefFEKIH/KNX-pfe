<?php

namespace App\Http\Controllers;
use App\Models\chapitre;
use App\Models\media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function ajoutervideo(Request $request,Chapitre $chapitre,$id)
    {
        $post = new Media();
        $post->nom = $request->nom;
        if($request->hasfile('adresse')){
            $file = $request->file('adresse');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('video/', $filename);
            $post->adresse= $filename;}
            $chapitre=Chapitre::find($id);
        $post->chapitre_id=$chapitre->id;

             if ($post->save()) {
                return redirect()->route('traiterchapitre',$id);
        }
    }
  
      
    public function destroy($id)
    {
        $Quiz = Media::find($id);
        $Quiz->delete();
        return redirect()->route('AdminDashboard/cour');
    }
}
