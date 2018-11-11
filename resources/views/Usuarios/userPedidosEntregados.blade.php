@extends('layouts.UserVentana')


@section('content')

<div align="center">
	<h1>Pedidos Entregados</h1>
</div><br>

<div class="from-group">
	<table class="table table_striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>No.de Prendas</th>
				<th>Costo</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pedidos as $pedido)
			<!--- validación para el estado de los pedidos--->
			@if($pedido->Estado == 'Listo' and $pedido->cliente_id == Auth::user()->id)
			<tr>
				<td>{{$pedido['id']}}</td>
				<td>{{$pedido['numeroprenda']}}</td>
				<td>{{$pedido['Costo']}}</td>
			</tr>
			@endif
			@endforeach	
			
		</tbody>
	</table>
</div>




@endsection