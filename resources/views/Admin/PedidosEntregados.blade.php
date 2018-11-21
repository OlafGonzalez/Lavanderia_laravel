@extends('layouts.AdminVentana')


@section('content')

<div align="center">
	<h1>Pedidos Entregados</h1>
</div><br>

<div id="div1" class="from-group">
	<table class="table table_striped">
		<thead>
			<tr>
				<th>No. de Pedido</th>
				<th>No.de Prendas</th>
				<th>Usuario</th>
				<th>Costo</th>
				<th>Fecha de entrega</th>
				<th>Hora de entrega</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pedidos as $pedido)
			<!--- validación para el estado de los pedidos--->
			@if($pedido->Estado == 'Listo')
			<tr>
				<td>{{$pedido['id']}}</td>
				<td>{{$pedido['numeroprenda']}}</td>
				@foreach($usuarios as $usuario)
				@if($usuario->id == $pedido->cliente_id)
				<td>{{$usuario['name']}}</td>
				@endif
				@endforeach
				<td>{{$pedido['Costo']}}</td>
				<td>{{$pedido['fecha_entragado']}}</td>
				<td>{{$pedido['hora_pListo']}}</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>




@endsection