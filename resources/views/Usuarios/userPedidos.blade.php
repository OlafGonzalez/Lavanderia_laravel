@extends('layouts.UserVentana')


@section('content')

<div align="center">
	<h1>Pedidos Pendientes</h1>
</div><br>

<div class="from-group">
	<table class="table table_striped">
		<thead>
			<tr>
				<th>No.pedido</th>
				<th>No.de Prendas</th>
				<th>Estado</th>
				<th>Costo</th>
				<th colspan="2">Acción</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pedidos as $pedido)
			@if(($pedido->Estado == 'Espera' or $pedido->Estado == 'Lavando'or $pedido->Estado == 'Entregado' or $pedido->Estado == 'Para Entregar') and ($pedido->cliente_id == Auth::user()->id))
			<tr>
				<td>{{$pedido['id']}}</td>
				<td>{{$pedido['numeroprenda']}}</td>
				<td>{{$pedido['Estado']}}</td>
				<td>{{$pedido['Costo']}}</td>
				@if($pedido->Estado == 'Espera')
				<td>
	          		<form action="{{action('PedidosController@destroy', $pedido['id'])}}" method="post">
	            	@csrf
	            	<input name="_method" type="hidden" value="DELETE">
	            	<button class="btn btn-danger" type="submit">Eliminar</button>
          			</form>
        		</td>
				@endif


				
			</tr>
			@endif	
			@endforeach
		</tbody>
	</table>
</div>




@endsection