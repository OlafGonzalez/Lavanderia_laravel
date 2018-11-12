@extends('layouts.UserVentana')


@section('content')

<div align="center">
	<h1>Nuevo pedido</h1><br>

</div>
<div align="center">
	<form id="formulario" name="test" class="from-group" method="POST" onsubmit="return valida(this)" action="\nuevo">
    <p>
      
    @csrf
    <div class="from-group col-md-2" align="center">
      <div class="from-group"> 
            <label for="">Numero de Prendas</label>
            <input type="number" id="noprenda" min="1" max="10"  name="noprenda" class="form-control" placeholder="No.de prendas">
        </div><br>
        <div class="from-group">
          <label for="prenda">Tipo de prendas</label>
          <select id="prenda" name="prenda">
          <option></option>
          <option value="Algodon">algodon</option>
          <option value="Seda">Seda</option>
          <option value="Mezclilla">Mezclilla</option>
          </select>
        </div><br>
        <div class="from-group">
          <label for="">Fecha para Entregar Ropa</label><br>
          <input id="fecha_id" type="date" name="fecha" min="<?php echo date("Y-m-d");?>" placeholder="fecha">
        </div><br>
        <div class="from-group">
          <label for="">Hora de entrega</label>
          <input type="time" name="hora" id="hora_id" min="09:00" max="20:00" required>
          <span class="validity"></span>
        </div><br>


      
    </div><br>
    <div class="from-group">
      
  <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
    </p>
  </form>
</div>

@endsection