<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchsController extends Controller
{
    public function index()
    {
        $matchs = Matchs::all();
        return view('matchs.index', compact('matchs'));
    }
}
