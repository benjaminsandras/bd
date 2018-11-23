@extends('template')

@section('titre')
    Les collections
@endsection

@section('contenu')

<div class="container">
	@foreach($info as $info)
 		<div class="row">
 			<div class="col-sm-4">
 				<img class="img_disp" src="{{$info->image}}">
 			</div>
 			<div class="col-sm-8 info">
 				<p>- {{$info->nom}}</p>	 
 				<p>- tome {{$info->tome}}</p> 
 				<p>- {{$info->nom_auteur}}</p>
 			</div>
 		</div>
 	@endforeach
</div>


 
@endsection