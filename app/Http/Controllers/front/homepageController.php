<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    public function index()
    {
        return view ('Front.page daccueil');
    }
}
