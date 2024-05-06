<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SportController extends Controller
{
    public function index()
    {
        $sports = Sport::all();
        return view('sports.index', compact('sports'));
    }
}
