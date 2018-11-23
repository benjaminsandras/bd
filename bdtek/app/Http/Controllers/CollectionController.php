<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Collection;
use App\BD;
use App\Contient;

class CollectionController extends Controller
{

	public function clicbd(){

		if (isset($_GET['bd'])) {

			$BD = Collection::find(intval($_GET['bd']))->BD;
		 	return view('dispcollection', ['BD' => $BD]);
    	}
	}	
	
	public function clic(){
		
		if (isset($_GET['humour'])) {

    		$liste=Collection::where('categorie',$_GET['humour'])->get();
        	return view('Collection', ['liste' => $liste]);
		}
	
		if (isset($_GET['action'])) {

    		$liste=Collection::where('categorie',$_GET['action'])->get();
        	return view('Collection', ['liste' => $liste]);
		}

		if (isset($_GET['adulte'])) {

    		$liste=Collection::where('categorie',$_GET['adulte'])->get();
        	return view('Collection', ['liste' => $liste]);
		}

		
		if (isset($_GET['fantastique'])) {

    		$liste=Collection::where('categorie',$_GET['fantastique'])->get();
        	return view('Collection', ['liste' => $liste]);
		}
	}
}