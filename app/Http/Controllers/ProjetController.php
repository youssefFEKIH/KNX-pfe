<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Projet $projet)
    {
        $projet = Projet::all();
        return view('Admin.Projets', compact('projet'));
    }
    public function index2(Projet $projet)
    {
        $projet = Projet::all();
        return view('Front.projets', compact('projet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $post = new Projet();
        $post->titre = $request->titre;
        $post->description = $request->description;

        if($request->hasfile('url_image')){
            $file = $request->file('url_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('images/', $filename);
            $post->url_image= $filename;


        }
           if( $post->save()){ return redirect()->route('AdminDashboard/projet');}


    }





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
     * @param  \App\Models\Projet $Projet
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $Projet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projet  $Projet
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $Projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projet $Projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Projet = Projet::find($id);
        $Projet->update($request->all());
        return redirect()->route('AdminDashboard/projet/update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projet  $Projet
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projet = Projet::find($id);
        $projet->delete();
        return redirect()->route('AdminDashboard/projet');
    }
}
