<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\BD;
use App\Collection;

class BDController extends Controller
{
    public function showtome(){

		if (isset($_GET['tome'])) {

	    	$decouverte1 = Collection::orderBy('id','desc')->limit(3)->get(); 
			$decouverte2 = Collection::orderBy('id','desc')->offset(3)->limit(3)->get();
			$decouverte3 = Collection::orderBy('id','desc')->offset(6)->limit(3)->get();
    		$info=BD::where('id',$_GET['tome'])->get();
        	return view('tome', ['info' => $info,
        						'decouverte1' => $decouverte1,
								'decouverte2' => $decouverte2,
								'decouverte3' => $decouverte3

        						]);
		}
	}
}
