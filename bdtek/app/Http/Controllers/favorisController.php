<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class favorisController extends Controller
{
    public function show(){

    	// $activites=Activite::all();
        return view('favoris');
	}
}
