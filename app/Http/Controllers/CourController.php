<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Courp;
use App\Models\chapitre;
use App\Models\enonce;
use App\Models\choix;
use App\Models\media;
use App\Models\question;
use App\Models\test;
use App\Models\reponse;
use App\Models\quiz;
use App\Models\membre;
use Illuminate\Http\Request;

class CourController extends Controller
{
    public function cour(Cours $Cour,Chapitre $chapitre,Enonce $enonce,Choix $choix,Media $media,Question $question,Quiz $quiz,Test $test,Reponse $reponse)
    {   
        //dd(Cours::find(1)->chapitres);
        $Cour = Cours::all();
        $quiz = Quiz::all();
        $enonce = Enonce::all();
        $choix = Choix::all();
        $media = Media::all();
        $question = question::all();
        $test = Test::all();
        $reponse = Reponse::all();
        $chapitre = Chapitre::all();
        return view('AdminF.cour', compact('Cour','chapitre','quiz','enonce','choix','test','media','question','reponse'));
    }
    public function courp(Courp $Cour)
    {
        $Cour = courp::all();
        return view('AdminF.courp', compact('Cour'));
    }
    public function modifiercour(Request $request){
        $nom = $request->nom;
        $description = $request->description;
          
        if($request->hasfile('url_image')){
            
            $file = $request->file('url_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('images/', $filename);
            $url_image= $filename;
        } 
        
    $update = [
        'nom' =>$nom,
        'description'=>$description ,
        'url_image'=>$url_image, ];
        $id=$request->id;
        $Cours = Cours::find($id);
        $Cours->update($update);
        return redirect()->route('AdminDashboard/cour');  
        
              

    }
    public function coursp(Courp $Courp)
    {
        $Courp = courp::all();
        return view('Front.cours', compact('Courp'));
    }

    public function create(Request $request)
    {
        $post = new Cours();
        $post->nom = $request->nom;
        $post->description = $request->description;
        $post->type = $request->input('type');

       

        if ($request->hasfile('url_image')) {
            $file = $request->file('url_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('images/', $filename);
            $post->url_image = $filename;
        }
        if ($post->save()) {
            return redirect()->route('AdminDashboard/cour');
        }
    }


    public function ajouterCourp(Request $request)
    {
        $post = new Courp();
        $post->nom = $request->nom;
        $post->resumer = $request->resumer;
        $post->description = $request->description;
        $post->nb = $request->nb;
        $post->dated = $request->dated;
        $post->heured = $request->heured;
        $post->datef = $request->datef;
        $post->heuref = $request->heuref;
        $post->statut= $request->statut;

       

        if ($request->hasfile('url_image')) {
            $file = $request->file('url_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('images/', $filename);
            $post->url_image = $filename;
        }
        if ($post->save()) {
            return redirect()->route('courp');
        }
    }

    public function destroy($id)
    {
        $Cours = Cours::find($id);
        $Cours->delete();
        return redirect()->route('AdminDashboard/cour');
    }
    public function terminer($id,Request $request)
    {   
        $statut='Terminer';
        $Cours = Courp::find($id);
        $update =['statut' =>$statut];
        $Cours->update($update);
        return redirect()->route('courp');
    }
    public function destroycourp($id)
    {
        $Cours = Courp::find($id);
        $Cours->delete();
        return redirect()->route('courp');
    }


    public function modifierCourp(Request $request)
    {
        
        $nom = $request->nom;
        $resumer = $request->resumer;
        $description = $request->description;
        $nb = $request->nb;
        $dated = $request->dated;
        $heured = $request->heured;
        $datef = $request->datef;
        $heuref = $request->heuref;
        $statut = $request->statut;
     
        if($request->hasfile('url_image')){
            
            $file = $request->file('url_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('images/', $filename);
            $url_image= $filename;
        } 
        
    $update = [
        'nom' =>$nom,
        'resumer'=>$resumer ,
        'description'=>$description ,
        'nb'=>$nb ,
        'dated'=>$dated ,
        'heured'=>$heured,
        'datef'=>$datef,
        'heuref'=>$heuref,
        'statut'=>$statut,
        'url_image'=>$url_image, ];
        $id=$request->id;
        $Cours = Courp::find($id);
        $Cours->update($update);
        return redirect()->route('courp');  
        
              
           
    }
    public function courpresentiel($id,Courp $Courp)
    {   
        $Courp = Courp::find($id);
       return view('Front.courpresentiels', compact('Courp'));
    }
    public function   reserver($id)
    {
        $Cours = Courp::find($id);
        if(($Cours->nb)>0){
        $membre= auth()->user();
        $cour=Courp::find($id);
        $cour->membres()->attach($membre);
        $x=(int)($Cours->nb)-1;
        $update =['nb'=>$x,];
        if($Cours->update($update)){
            return redirect(route('presentielcours',$id));}}

        
    }
    public function listeCP($id,Courp $Courp,Membre $membre)
    {   
        $tab=[];
        $Courp = Courp::find($id);
        $membre = Membre::with('courp')->get()->toArray();
        foreach($membre as $m){
         if(!(empty($m["courp"]))) 
            foreach($m["courp"] as $c)
            if(($c['id']==$id)&&!(in_array($m,$tab)))
            array_push($tab,$m);
            

        }
        
        return view('AdminF.liste', compact('Courp','tab'));
    }
    
   
}
