<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use App\Models\Courp;
use Illuminate\Http\Request;

class CourController extends Controller
{
    public function cour(Cours $Cour)
    {
        $Cour = Cours::all();
        return view('AdminF.cour', compact('Cour'));
    }
    public function courp(Courp $Cour)
    {
        $Cour = courp::all();
        return view('AdminF.courp', compact('Cour'));
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
   
}
