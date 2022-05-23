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

    
}
