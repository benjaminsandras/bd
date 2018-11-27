<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mon_espaceController extends Controller
{
    public function showme(){

    	// $activites=Activite::all();
        return view('mon_espace');
	}
}
