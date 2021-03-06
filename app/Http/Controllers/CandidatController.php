<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function candidat(Candidat $Candidats)
    {

        if (session()->has('mail')){          
            $Candidats = Candidat::all();
            return view('Admin.candidat', compact('Candidats'));}
            else {return view('Front.connexion');}
        }

    public function create(Request $request)
    {
        $post = new Candidat();
        $post->nom = $request->nom;
        $post->pays = $request->pays;
        $post->mail = $request->mail;
        $post->numero = $request->numero;
        
        if ($request->hasfile('cv')) {
            $file = $request->file('cv');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('images/', $filename);
            $post->cv = $filename;
        }
        if ($post->save()) {
            return redirect()->route('home');
        }
    }


    public function destroy($id)
    {
        $Candidats = Candidat::find($id);
        $Candidats->delete();
        return redirect()->route('AdminDashboard/candidat');

    }
}
