@extends('template')

@section('titre')
    Les collections
@endsection

@section('contenu')

<div class="container">
 	<div class="row">
 		@foreach($BD as $BD)
 			<div class="img_carroussel">
 				<form action="tome" method="get">
 					<button name="tome" value="{{$BD->id}}" type="submit"><img class="img_carroussel" src="{{$BD->image}}"></button>
 				</form>
 			</div>
 		@endforeach
 	</div>
</div>

 
@endsection