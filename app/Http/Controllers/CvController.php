<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use App\Models\Exp;

use App\Models\Edu;
use App\Models\Crt;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CvFormateur(Cv $cv, Edu $edu, Exp $exp, Crt $crt)
    {
        
        if (session()->has('mail')){          
        $cv = Cv::all();
        $exp = Exp::all();
        $edu = Edu::all();
        $crt = Crt::all();
        return view('Admin.CvFormateur', compact('cv', 'exp', 'edu', 'crt'));}
        else {return view('Front.connexion');}
    }
    public function index(Cv $cv, Edu $edu, Exp $exp, Crt $crt)
    {
        $cv = Cv::all();
        $exp = Exp::all();
        $edu = Edu::all();
        $crt = Crt::all();
        return view('Formateur.index', compact('cv', 'exp', 'edu', 'crt'));
    }
    public function create(Request $request)
    {
        $post = new cv();
        $post->nom = $request->nom;
        $post->prenom = $request->prenom;
        $post->adresse = $request->adresse;
        $post->mail = $request->mail;
        $post->numero = $request->numero;
        $post->fb = $request->fb;
        $post->linkedin = $request->linkedin;
        $post->competence = $request->competence;
        $post->interet = $request->interet;
        $post->description = $request->description;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('images/', $filename);
            $post->image = $filename;
        }
        if ($post->save()) {
            return redirect()->route('AdminDashboard/cv');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function show(Cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function edit(Cv $cv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cv $cv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cv $cv)
    {
        //
    }
}
