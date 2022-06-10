<?php

namespace App\Http\Controllers;

use App\Models\media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function ajoutervideo(Request $request)
    {
        $post = new Media();
        $post->nom = $request->nom;
        if($request->hasfile('adresse')){
            $file = $request->file('adresse');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('video/', $filename);
            $post->adresse= $filename;}

             if ($post->save()) {
            return redirect()->route('AdminDashboard/cour');
        }
    }
}
