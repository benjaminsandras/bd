@extends('template')

@section('titre')
    Les collections
@endsection

@section('contenu')
	

<div class="container">
 		 @foreach($BD as $BD)
 	<div class="row">
 		<div class="col-sm-12">
 			<button name="tome" value="{{$BD->id}}" type="submit"><img src="{{$BD->image}}"></button>
 		</div>
 		<!-- <div class="col-sm-5">
 			
 		</div> -->
 	</div>

 	

 	<!-- <div class="row">
 		<div class="col-sm-5">
 			<button type="submit">Adulte</button>
 		</div>
 		<div class="col-sm-5">
 			<button type="submit">Humour</button>
 		</div>
 	</div> -->
 	@endforeach
</div>

 liste_collection
@endsection