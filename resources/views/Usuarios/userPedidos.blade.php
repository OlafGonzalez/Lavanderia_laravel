@extends('layouts.UserVentana')


@section('content')

<div align="center">
	<h1>Pedidos Pendientes</h1>
</div><br>

<div class="from-group">
	<table class="table table_striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>No.de Prendas</th>
				<th>Estado</th>
				<th>Costo</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($pedidos as $pedido)
			@if($pedido->Estado == 'Espera' and $pedido->cliente_id == Auth::user()->id)
			<tr>
				<td>{{$pedido['id']}}</td>
				<td>{{$pedido['numeroprenda']}}</td>
				<td>{{$pedido['Estado']}}</td>
				<td>{{$pedido['Costo']}}</td>
				
			</tr>	
			@endif
			@endforeach
		</tbody>
	</table>
</div>




@endsection