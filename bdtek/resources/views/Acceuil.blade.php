
@extends('template')

@section('titre')
    Acceuil
@endsection

@section('contenu')


<div class="container">
		
 	<form action="Collection" method="get">
 		<div class="row">
 			<div class="col-sm-6">
 				<button class="accbut" name="humour" type="submit" value="humour"><em>Humour</em></button>
 			</div>
 			<div class="col-sm-6">
 				<button class="accbut" name="action" type="submit" value="action"><em>Action</em></button>
 			</div>
 		</div>

 		<div class="row">
 			<div class="col-sm-6">
 				<button class="accbut" name="adulte" type="submit" value="adulte"><em>Adulte</em></button>
 			</div>
 			<div class="col-sm-6">
 				<button class="accbut" name="fantastique" type="submit" value="fantastique"><em>Fantastique</em></button>
 			</div>
 		</div>
 	</form>
</div>


@endsection


	
