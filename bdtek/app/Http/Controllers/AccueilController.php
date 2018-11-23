<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\image;

class AccueilController extends Controller
{
     public function show(){

    	$img = image::all();
        return view('Acceuil',['img'=>$img]);
	}
}
