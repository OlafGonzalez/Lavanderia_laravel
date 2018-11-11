@extends('layouts.AdminVentana')


@section('content')

<div align="center">
	<h1>EDITAR PEDIDO</h1>
</div><br>

<div class="from-group">
	<div class="conteiner"><br/>
        <form method="post" action="{{action('AdminPedidosEController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Costo">Costo</label>
            <input type="number" step=".5" class="form-control" name="Costo" value="{{$pedido->Costo}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="prenda">Tipo de Prenda</label>
              <select name="prenda">
                <option value="{{$pedido->Tipo_prenda}}">{{$pedido->Tipo_prenda}}</option>
                <option value="Seda">Seda</option>
                <option value="Algodon">Algodon</option>
                <option value="Mezclilla">Mezclilla </option>
              </select>
            </div>
          </div>
			<!----
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Phone Number:</label>
              <input type="text" class="form-control" name="number" value="">
            </div>
          </div>
          ---->
        <div class="row" align="center">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Actualizar</button>
          </div>
        </div>
      </form>
		
	








	</div>
</div>
@endsection