<?php

namespace App\Http\Controllers;

use App\Models\nouveaute;
use App\Models\nouv;
use Illuminate\Http\Request;

class NouveauteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.knxtunisie-com', compact('N', 'No'));

    }
    public function index2(nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.knxtunisie-acceuil', compact('N', 'No'));

    }
    public function index3(nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.knx', compact('N', 'No'));

    }
    public function index4(nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.knxtunisie-logiciel', compact('N', 'No'));

    }
    public function index5(nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.knxtunisie-doc', compact('N', 'No'));

    }
    public function index6(nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.knxtunisie-formation', compact('N', 'No'));

    }
    public function index7(nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.knxtunisie-actus', compact('N', 'No'));

    }
    public function index8(nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.knxtunisie-contact', compact('N', 'No'));

    }



    public function suite1(nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.knxbladesuite', compact('N', 'No'));

    }
    public function suite2($id,nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.acceuil', compact('N', 'No'));

    }
    public function suite3($id,nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.actus', compact('N', 'No'));

    }
    public function suite4($id,nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.com', compact('N', 'No'));

    }
    public function suite5($id,nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.contact', compact('N', 'No'));

    }
    public function suite6($id,nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.doc', compact('N', 'No'));

    }
    public function suite7($id,nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.formation', compact('N', 'No'));

    }
    public function suite8($id,nouveaute $N, nouv $No)
    {
        $N = nouveaute::all();
        $No = nouv::all();
         return view('knxtunisie.logiciel', compact('N', 'No'));

    }



    public function store(Request $request)
    {   $post = new nouveaute();


        if($request->hasfile('url_image')){
            $file = $request->file('url_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('images/', $filename);
            $post->url_image= $filename;
        }

           if( $post->save()){ return redirect()->route('AdminDashboard/KNX')->with('success', 'Image ajouter avec succès.');}

    }




    public function nouveaute(nouveaute $nouveaute, nouv $No)
    {
        if (session()->has('mail')){          
            $N = nouveaute::all();
            $No = nouv::all();
            return view('Admin.KnxTunisie', compact('N','No'));}
            else {return view('Front.connexion');}
         }


    public function destroy($id)
    {
        $N = nouveaute::find($id);
        $N->delete();
        return redirect()->route('AdminDashboard/KNX')->with('erreur', 'Image supprimé avec succès.');
    }



}
