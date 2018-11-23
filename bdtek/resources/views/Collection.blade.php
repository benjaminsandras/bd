@extends('template')

@section('titre')
    Les collections
@endsection

@section('contenu')

<div class="container">
 	<div class="row">
 		@foreach($liste as $liste)
 			<div class="img_carroussel">
 				<form action="BD" method="get">
 					<button name="bd" type="submit" value="{{$liste->id}}"><img class="img_carroussel" src="{{ $liste->image_collection }}"></button>
 				</form>
 			</div>
		@endforeach
 	</div>

</div>


 collection
@endsection