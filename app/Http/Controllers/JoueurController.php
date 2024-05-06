<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoueurController extends Controller
{
    public function index()
    {
        $joueurs = Joueur::all();
        return view('joueurs.index', compact('joueurs'));
    }
}
