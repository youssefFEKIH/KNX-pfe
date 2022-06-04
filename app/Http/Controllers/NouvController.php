<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nouv;
class NouvController extends Controller
{
    public function store(Request $request)
    {   $post = new nouv();
        $post->titre = $request->titre;
        $post->description = $request->description;
        $post->type = $request->type;
        if($request->hasfile('url_nouveaute')){
            $file = $request->file('url_nouveaute');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('images/', $filename);
            $post->url_nouveaute= $filename;
        } 

           if( $post->save()){ return redirect()->route('AdminDashboard/KNX');}
         
    }

    
    public function destroy($id)
    {
        $No = nouv::find($id);
        $No->delete();
        return redirect()->route('AdminDashboard/KNX');
    }

    public function modifierNouvKnx(Request $request)
    {
        
        $titre = $request->titre;
        $description = $request->description;
        $type  = $request->type;
        $url_nouveaute = $request->url_nouveaute;
    
     
        if($request->hasfile('url_nouveaute')){
            
            $file = $request->file('url_nouveaute');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('images/', $filename);
            $url_nouveaute= $filename;
        } 
        
    $update = [
        'titre' =>$titre,
        'description'=>$description ,
        'type'  =>$type,
        'url_nouveaute'=>$url_nouveaute, ];
        $id=$request->id;
        $nouv = nouv::find($id);
        $nouv->update($update);
        return redirect()->route('AdminDashboard/KNX');  
          
    }

    
}
