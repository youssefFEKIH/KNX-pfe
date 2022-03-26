<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapitre;

class chapitreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chapitre = Chapitre::all()->toArray();
        return array_reverse($chapitre);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chapitre = new Chapitre([
            'nom' => $request->input('nom'),
            
            ]);
            $chapitre->save();
            return response()->json('Chapitre créé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chapitre = Chapitre::find($id);
        return response()->json($chapitre);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $chapitre = Chapitre::find($id);
        $chapitre->update($request->all());
        return response()->json('Chapitre MAJ !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chapitre = Chapitre::find($id);
        $chapitre->delete();
          return response()->json('Chapitre supprimé !');
    }
}
