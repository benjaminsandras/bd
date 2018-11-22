
@extends('template')

@section('titre')
    Acceuil
@endsection

@section('contenu')
 Acceuil

 <div class="container">
 		
 			<form action="Collection" method="get">
 	<div class="row">
 		<div class="col-sm-5">
 				<button name="humour" type="submit" value="humour">Humour</button>
 		</div>
 		<div class="col-sm-5">
 			
 				<button name="action" type="submit" value="action">Action</button>
 			
 		</div>
 	</div>

 	<div class="row">
 		<div class="col-sm-5">
 		
 				<button name="adulte" type="submit" value="adulte">Adulte</button>
 			
 		</div>
 		<div class="col-sm-5">
 		
 				<button name="fantastique" type="submit" value="fantastique">Fantastique</button>
 			
 		</div>
 	</div>
 	
 			</form>
</div>
@endsection

