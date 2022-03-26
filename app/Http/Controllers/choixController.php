<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Choix;

class choixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $choix = Choix::all()->toArray();
       return array_reverse($choix);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $choix = new Choix([
            'choix' => $request->input('choix'),
            
            ]);
            $choix->save();
            return response()->json('Choix créé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $choix = Choix::find($id);
         return response()->json($choix);
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
        $choix = Choix::find($id);
       $choix->update($request->all());
        return response()->json('Choix MAJ !'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $choix = Choix::find($id);
      $choix->delete();
       return response()->json('Choix supprimé !');
    }
}
