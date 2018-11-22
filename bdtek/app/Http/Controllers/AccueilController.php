<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
     public function show(){

    	// $activites=Activite::all();
        return view('Acceuil');
	}
}
