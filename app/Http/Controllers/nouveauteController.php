<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nouveaute;
class nouveauteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nouveaute = Nouveaute::all()->toArray();
        return array_reverse($nouveaute);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nouveaute = new nouveaute([
            
            ]);
            $nouveaute->save();
            return response()->json('Nouveaute créé !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nouveaute = Nouveaute::find($id);
         return response()->json($nouveaute);
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
        $nouveaute = Nouveaute::find($id);
$nouveaute->update($request->all());
return response()->json('Nouveaute MAJ !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nouveaute = Nouveaute::find($id);
    $nouveaute->delete();
     return response()->json('Nouveaute supprimé !');
    }
}