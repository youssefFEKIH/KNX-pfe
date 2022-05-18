<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CourController extends Controller
{
    public function cour(Cours $Cour)
    {
        $Cour = Cours::all();
        return view('AdminF.cour', compact('Cour'));
    }

    public function create(Request $request)
    {
        $post = new Cours();
        $post->nom = $request->nom;
        $post->description = $request->description;
        $post->type = $request->input('type');

       

        if ($request->hasfile('url_image')) {
            $file = $request->file('url_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('images/', $filename);
            $post->url_image = $filename;
        }
        if ($post->save()) {
            return redirect()->route('AdminDashboard/cour');
        }
    }

    public function destroy($id)
    {
        $Cours = Cours::find($id);
        $Cours->delete();
        return redirect()->route('AdminDashboard/cour');
    }

}
