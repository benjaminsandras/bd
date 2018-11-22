@extends('template')

@section('titre')
    Les collections
@endsection

@section('contenu')

<div class="container">
 		 @foreach($liste as $liste)
 		 <form action="BD" method="get">
 	<div class="row">
 		<div class="col-sm-12">
 			<button name="bd" type="submit" value="{{$liste->id}}"><img src="{{ $liste->image_collection }}"></button>
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



 collection
@endsection