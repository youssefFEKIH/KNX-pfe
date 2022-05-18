<?php

namespace App\Http\Controllers;

use App\Models\nouveaute;
use Illuminate\Http\Request;

class NouveauteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(nouveaute $N)
    {
        $N = nouveaute::all();
         return view('knxtunisie.knxtunisie-com', compact('N'));
        
    }
    public function index2(nouveaute $N)
    {
        $N = nouveaute::all();
         return view('knxtunisie.knxtunisie-acceuil', compact('N'));
        
    }
    public function index3(nouveaute $N)
    {
        $N = nouveaute::all();
         return view('knxtunisie.knx', compact('N'));
        
    }
    public function index4(nouveaute $N)
    {
        $N = nouveaute::all();
         return view('knxtunisie.knxtunisie-logiciel', compact('N'));
        
    }
    public function index5(nouveaute $N)
    {
        $N = nouveaute::all();
         return view('knxtunisie.knxtunisie-doc', compact('N'));
        
    }
    public function index6(nouveaute $N)
    {
        $N = nouveaute::all();
         return view('knxtunisie.knxtunisie-formation', compact('N'));
        
    }
    public function index7(nouveaute $N)
    {
        $N = nouveaute::all();
         return view('knxtunisie.knxtunisie-actus', compact('N'));
        
    }
    public function index8(nouveaute $N)
    {
        $N = nouveaute::all();
         return view('knxtunisie.knxtunisie-contact', compact('N'));
        
    }

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $post = new nouveaute();
        if($request->hasfile('url_image')){
            $file = $request->file('url_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('images/', $filename);
            $post->url_image= $filename;
     
        
        }          
           if( $post->save()){ return redirect()->route('AdminDashboard/KNX');}
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nouveaute  $nouveaute
     * @return \Illuminate\Http\Response
     */
    public function nouveaute(nouveaute $nouveaute)
    {
        $N = nouveaute::all();
        return view('Admin.KnxTunisie', compact('N'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nouveaute  $nouveaute
     * @return \Illuminate\Http\Response
     */
    public function edit(nouveaute $nouveaute)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nouveaute  $nouveaute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nouveaute $nouveaute)
    {
        //
    }










    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nouveaute  $nouveaute
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $N = nouveaute::find($id);
        $N->delete();
        return redirect()->route('AdminDashboard/KNX');
    }
}
