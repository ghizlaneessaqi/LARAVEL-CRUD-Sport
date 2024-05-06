<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultatController extends Controller
{
    public function index()
    {
        $resultats = Resultat::all();
        return view('resultats.index', compact('resultats'));
    }
}
