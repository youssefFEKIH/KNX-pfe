<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class CandidatController extends Controller
{
    public function candidat(Candidat $Candidat)
  {
    $Candidat = Candidat::all();
    return view('Admin.candidat', compact('Candidat'));
  }



}
