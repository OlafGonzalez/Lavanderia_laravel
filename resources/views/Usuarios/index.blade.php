@extends('layouts.app')

@section('title','Usuarios')

@section('content')

	<div class="row">
	@foreach($Usuarios as $usuario)
		<div class="col-sm">
<div class="card" style="width: 18rem;">
  		<div class="card-body">
   			 <h5 class="card-title">{{$usuario->name}}</h5>
   				 <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
   			 <a href="#" class="btn btn-primary">Go somewhere</a>
 		 </div>
</div>				
		</div>
	@endforeach
	</div>
	
@endsection
