<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassementControllers extends Controller
{
    public function index()
    {
        $classements = Classement::all();
        return view('classements.index', compact('classements'));
    }
}
