<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enonce;

class EnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enonce = Enonce::all()->toArray();
       return array_reverse($enonce);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enonce = new Enonce([
            'enonce' => $request->input('enonce'),
            
            ]);
            $enonce->save();
            return response()->json('Enonce créé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enonce = Enonce::find($id);
         return response()->json($enonce);
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
        $enonce = Enonce::find($id);
       $enonce->update($request->all());
        return response()->json('Enonce MAJ !'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enonce = Enonce::find($id);
      $enonce->delete();
       return response()->json('Enonce supprimé !');
    }
}
