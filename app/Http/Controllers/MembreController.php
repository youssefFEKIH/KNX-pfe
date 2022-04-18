<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\Membre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

       

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $validator = Validator::make($request->all(), 
            [
            'nom'=> 'required',
            'mail'=>'required|email|unique:membres',
            'mot_de_passe'=>'required|min:8',
            'mot_de_passe_2'=>'required|same:mot_de_passe'
           ]);
           if($validator->fails()){
            return redirect('inscriptionget')->withErrors($validator)->withInput();
        }
           $m=new membre();
           $m-> nom=$request->nom;
           $m-> mail=$request->mail;
           $m-> mot_de_passe=Hash::make($request->mot_de_passe);
           if ($m->save()){
            return view('Front.index');
           }
         
        
    }
     public function connect(Request $request){
        $validator = Validator::make($request->all(), 
        [
        'mail'=>'required|email|',
        'mot_de_passe'=>'required|min:8',
        
       ]);
       if($validator->fails()){
        return redirect('connexion')->withErrors($validator)->withInput();
    }
        
        $resultat=auth()->attempt([
            'mail' => request('mail'),
            'password' => request('mot_de_passe'),
        ]);
        var_dump($resultat);
        
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function show(Membre $membre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function edit(Membre $membre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Membre $membre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Membre $membre)
    {
        //
    }
    
}
