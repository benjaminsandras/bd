<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
// use App\image;
use App\Collection;

class AccueilController extends Controller
{
     public function showacc(){

		$decouverte1 = Collection::orderBy('id','desc')->limit(3)->get(); 
		$decouverte2 = Collection::orderBy('id','desc')->offset(3)->limit(3)->get();
		$decouverte3 = Collection::orderBy('id','desc')->offset(6)->limit(3)->get();
		
		return view('Acceuil',
			[
				'decouverte1' => $decouverte1,
				'decouverte2' => $decouverte2,
				'decouverte3' => $decouverte3
			]);
		
	}
}
