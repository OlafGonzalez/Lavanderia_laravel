@extends('layouts.AdminVentana')


@section('content')

<div align="center">
	<h1>Pedidos Pendientes</h1>
</div><br>

<div class="">
	<table align="center" class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre del cliente</th>
				<th>Fecha programada de entrega</th>
				<th>No.de Prendas</th>
				<th>Tipo de Prenda</th>
				<th>Estado</th>
				<th>Costo en Pesos</th>
				<th colspan="3">Acción</th>
			</tr>
		</thead>
		<tbody>
		@foreach($pedidos as $pedido)
		@if($pedido->Estado == 'Espera')
			<tr>
				<td>{{$pedido['id']}}</td>
				@foreach($usuarios as $usuario)
				@if($usuario->id == $pedido->cliente_id)
				<td>{{$usuario['name']}}</td>
				@endif
				@endforeach
				
				<td>{{$pedido['fecha_recibido']}}</td>
				<td>{{$pedido['numeroprenda']}}</td>
				<td>{{$pedido['Tipo_prenda']}}</td>
				<td>{{$pedido['Estado']}}</td>
				<td>{{$pedido['Costo']}}</td>
				<td><a href="{{action('AdminPedidosEController@edit', $pedido['id'])}}" class="btn btn-warning">Modificar</a></td>
				<td>
	          		<form action="{{action('AdminPedidosEController@destroy', $pedido['id'])}}" method="post">
	            	@csrf
	            	<input name="_method" type="hidden" value="DELETE">
	            	<button class="btn btn-danger" type="submit">Eliminar</button>
          			</form>
        		</td>
        		<td>
        			<!----Boton para poner un pedido como completado ---->
					<form action="{{action('AdminController@update', $pedido['id'])}}" method="POST">
	            	@csrf
	            	 <input name="_method" type="hidden" value="PATCH">
	            	<input type="hidden" name="estado" value="Listo">
	            	<input type="hidden" name="fecha" value="<?php echo date("Y-m-d");?>">

	            	<button class="btn btn-success" type="submit">Listo</button>
          			</form>
        		</td>
			</tr>

			@endif
			@endforeach
			
		</tbody>
	</table>
</div>




@endsection