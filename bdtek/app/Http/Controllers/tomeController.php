<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tomeController extends Controller
{
    public function show(){

    	// $activites=Activite::all();
        return view('tome');
	}
}
