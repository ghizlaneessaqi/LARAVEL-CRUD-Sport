<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

    Route::middleware(['auth'])->group(function () {
        // Routes pour SportController
        Route::get('/sports', 'SportController@index')->name('sports.index');
        
        // Routes pour JoueurController
        Route::get('/joueurs', 'JoueurController@index')->name('joueurs.index');
        
        // Routes pour EquipeController
        Route::get('/equipes', 'EquipeController@index')->name('equipes.index');
        
        // Routes pour MatchController
        Route::get('/matchs', 'MatchController@index')->name('matchs.index');
        
        // Routes pour ResultatController
        Route::get('/resultats', 'ResultatController@index')->name('resultats.index');
        
        // Routes pour ClassementController
        Route::get('/classements', 'ClassementController@index')->name('classements.index');
    });






});
