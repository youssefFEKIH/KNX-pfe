<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CourController extends Controller
{
    public function cour(Cours $Cour)
    {
        $Cour = Cours::all();
        return view('Admin.cour', compact('Cour'));
    }
}
