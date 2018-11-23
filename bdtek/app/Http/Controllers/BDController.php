<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\BD;

class BDController extends Controller
{
    public function show(){

		if (isset($_GET['tome'])) {

    		$info=BD::where('id',$_GET['tome'])->get();
        	return view('tome', ['info' => $info]);
		}
	}
}
