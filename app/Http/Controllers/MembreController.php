<?php

namespace App\Http\Controllers;

use Validator;
use App\Models\Projet;
use App\Models\Membre;
use App\Models\cours;
use App\Models\courp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    
    
    
     public function index(Projet $projet, cours $Cours ,courp $Courp ) 
    {
        $projet = Projet::all();
        $Cours = cours::all();
        $Courp = courp::all();
       
        return view('Front.index', compact('projet','Cours','Courp' ));
    }


    
    public function mise() 
    {
        return view('Front.mise');
    }
  
    public function profil(Request $request,Membre $membre) 
    {  if (session()->has('mail')){
        $membre = Membre::all()->where('mail',session('mail'));
        return view('Front.profil', compact('membre' ));}
        else
        return view('Front.connexion');
    }
   
    
    public function profilC(Request $request)
    {
        
        $nom = $request->nom;
        $mot_de_passe = $request->mot_de_passe;
        $date_de_naissance = $request->date_de_naissance;
        $adresse = $request->adresse;
        $tel = $request->tel;
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
        'date_de_naissance'=>$date_de_naissance ,
        'adresse'=>$adresse ,
        'tel'=>$tel ,
        'description'=>$description,
        'url_image'=>$url_image ];
         if(Membre::where('mail',session('mail'))->update($update)){

            return redirect()->route('profil');  
         }     
           
    }
    

    public function index3()
    {
        return view('Front.page daccueil');
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


        $validator = Validator::make(
            $request->all(),
            [
                'nom' => 'required',
                'mail' => 'required|email|unique:membres',
                'mot_de_passe' => 'required|min:8',
                'mot_de_passe_2' => 'required|same:mot_de_passe'
            ]
        );
        if ($validator->fails()) {
            return redirect('inscriptionget')->withErrors($validator)->withInput();
        }
        $m = new membre();
        $m->nom = $request->nom;
        $m->mail = $request->mail;
        $m->mot_de_passe = Hash::make($request->mot_de_passe);
        if ($m->save()) {
            return view('Front.connexion');
        }
    }

    public function connect(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'mail' => 'required|email|',
                'mot_de_passe' => 'required|min:8',

            ]
        );
        if ($validator->fails()) {
            return redirect('connexion')->withErrors($validator)->withInput();
        }

        $resultat = auth()->attempt([
            $mail = 'mail' => request('mail'),
            $pass = 'password' => request('mot_de_passe'),
        ]);
        if ($resultat) {
            $data=$request->input();
            $request->session()->put('mail', $data['mail']);

            if (Auth::user()->type == 'A') {
                return redirect('AdminDashboard');
            } elseif (Auth::user()->type == 'F') {
                return redirect()->route('AdminDashboard/cour');
            } else {
                return redirect()->route('profil');
            }
        }
        return  redirect('profil')->withInput()->withErrors([
            'mot_de_passe' => "Vos identifiants sont incorrects"
        ]);
    }

    public function deconnexion(Request $request)
    {
        $request->session()->forget('mail');
        auth()->logout();     
        return redirect('home');
    }
    public function accueil()
    {
        if (auth()->guest()) {
            return redirect('connexion')->withInput()->withErrors([
                'mot_de_passe' => "Vous devez etre connecté pour avoir cette page."
            ]);
        } else {
            return var_dump(auth()->guest());
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function show(Membre $membre)
    {
        if (session()->has('mail')){
        $formateur = Membre::all()->where('type', 'F')->toArray();
        $membre = Membre::all()->where('type', 'M')->toArray();
        return view('Admin.FormateursEtMembre', compact('formateur','membre'));}
        else {return view('Front.connexion');}
    }
    public function addF(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'nom' => 'required',
                'mail' => 'required|email|unique:membres',
                'mot_de_passe' => 'required|min:8',
                'mot_de_passe_2' => 'required|same:mot_de_passe'
            ]
        );
        if ($validator->fails()) {
            return redirect('AdminDashboard')->withErrors($validator)->withInput();
        }
        $m = new membre();
        $m->nom = $request->nom;
        $m->mail = $request->mail;
        $m->mot_de_passe = Hash::make($request->mot_de_passe);
        $m->type = $request->type;
        if ($m->save()) {
            return redirect('AdminDashboard');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Membre  $membre
     * @return \Illuminate\Http\Response
     */
    public function edit(Membre $membre)
    {
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
    public function destroy($id)
    {
        $membre = Membre::find($id);
        $membre->delete();
        return redirect()->route('AdminDashboard');
    }

    
    
}
