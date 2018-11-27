<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Collection;
use App\BD;
use App\Contient;

class CollectionController extends Controller
{

	public function show(){

		$decouverte1 = Collection::orderBy('id','desc')->limit(3)->get(); 
		$decouverte2 = Collection::orderBy('id','desc')->offset(3)->limit(3)->get();
		$decouverte3 = Collection::orderBy('id','desc')->offset(6)->limit(3)->get();
		
		return view('template',
			[
				'decouverte1' => $decouverte1,
				'decouverte2' => $decouverte2,
				'decouverte3' => $decouverte3
			]);
		
	}

	public function clicbd(){

		if (isset($_GET['bd'])) {

			$decouverte1 = Collection::orderBy('id','desc')->limit(3)->get(); 
			$decouverte2 = Collection::orderBy('id','desc')->offset(3)->limit(3)->get();
			$decouverte3 = Collection::orderBy('id','desc')->offset(6)->limit(3)->get();
			$BD = Collection::find(intval($_GET['bd']))->BD;
		 	return view('dispcollection', ['BD' => $BD,
		 								'decouverte1' => $decouverte1,
										'decouverte2' => $decouverte2,
										'decouverte3' => $decouverte3
		 								]);
    	}
	}
	
	public function clic(){

		if (isset($_GET['humour'])) {

			$decouverte1 = Collection::orderBy('id','desc')->limit(3)->get(); 
			$decouverte2 = Collection::orderBy('id','desc')->offset(3)->limit(3)->get();
			$decouverte3 = Collection::orderBy('id','desc')->offset(6)->limit(3)->get();
    		$liste=Collection::where('categorie',$_GET['humour'])->get();
        	return view('Collection', ['liste' => $liste,
        							'decouverte1' => $decouverte1,
									'decouverte2' => $decouverte2,
									'decouverte3' => $decouverte3
									]);
		}
	
		if (isset($_GET['action'])) {

			$decouverte1 = Collection::orderBy('id','desc')->limit(3)->get(); 
			$decouverte2 = Collection::orderBy('id','desc')->offset(3)->limit(3)->get();
			$decouverte3 = Collection::orderBy('id','desc')->offset(6)->limit(3)->get();
    		$liste=Collection::where('categorie',$_GET['action'])->get();
        	return view('Collection', ['liste' => $liste,
        							'decouverte1' => $decouverte1,
									'decouverte2' => $decouverte2,
									'decouverte3' => $decouverte3
									]);
		}

		if (isset($_GET['adulte'])) {

			$decouverte1 = Collection::orderBy('id','desc')->limit(3)->get(); 
			$decouverte2 = Collection::orderBy('id','desc')->offset(3)->limit(3)->get();
			$decouverte3 = Collection::orderBy('id','desc')->offset(6)->limit(3)->get();
    		$liste=Collection::where('categorie',$_GET['adulte'])->get();
        	return view('Collection', ['liste' => $liste,
        							'decouverte1' => $decouverte1,
									'decouverte2' => $decouverte2,
									'decouverte3' => $decouverte3
									]);
		}

		
		if (isset($_GET['fantastique'])) {

			$decouverte1 = Collection::orderBy('id','desc')->limit(3)->get(); 
			$decouverte2 = Collection::orderBy('id','desc')->offset(3)->limit(3)->get();
			$decouverte3 = Collection::orderBy('id','desc')->offset(6)->limit(3)->get();
    		$liste=Collection::where('categorie',$_GET['fantastique'])->get();
        	return view('Collection', ['liste' => $liste,
									'decouverte1' => $decouverte1,
									'decouverte2' => $decouverte2,
									'decouverte3' => $decouverte3
        							]);
		}
	}
}