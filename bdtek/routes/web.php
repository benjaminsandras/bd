<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('template', 'CollectionController@show')->name('nameAccueil');

Route::get('/', 'AccueilController@showacc')->name('nameAccueil');

Route::get('Collection', 'CollectionController@clic')->name('nameDispCollection');
// Route::get('Collection', 'CollectionController@show')->name('nameDispCollection');


// Route::get('biip', 'activiteController@biip')->name('nameActivites');

Route::get('BD', 'CollectionController@clicbd')->name('nameListe_collection');

Route::get('mon_espace', 'mon_espaceController@showme')->name('nameMon_espace');

Route::get('tome', 'BDController@showtome')->name('nameTome');

// Route::get('ajax', 'localisationController@ajax');

// Route::get('favoris', 'favorisController@show')->name('nameFavoris');

// Route::get('demarche', 'demarcheController@show')->name('nameDemarche');
