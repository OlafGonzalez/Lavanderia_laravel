<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<head>
	<meta charset="utf-8">
	<title>Usuario - </title>
	 <script>
			function verifica()
			{
			if(document.test.prueba.value == "")
			{
			alert("El campo nombre esta vacio");
			 //y aqui viene la respuesta a tu pregunta
			document.getElementById('nick').style.border = 'thin solid #FF0000';
			  return false; //no se realiza el submit
				}
			else
				{
			 return true; //se realiza el submit
				}
			}

			function check(input) {
			    if (input.value == "good" ||
			        input.value == "fine" ||
			        input.value == "tired") {
			      input.setCustomValidity('"' + input.value + '" is not a feeling.');
			   } else {
			      // input is fine -- reset the error message
			      input.setCustomValidity("");
			    }
			  }
//validaciones 


function valida(f) {
  var ok = true;
  var msg = "Debes escribir contenido en los campos:\n";
  if(f.noprenda.value == "")
  {
    msg += "- Numero de prenda\n";
    ok = false;
  }
  if(f.prenda.value == "")
  {
    msg += "- Tipo de prenda \n";
    ok = false;
  }
  if(f.fecha_id.value == "")
  {
    msg += "- Fecha de entrega\n";
    ok = false;
  }


  if(ok == false)
    alert(msg);
  return ok;
}
	</script>


</head>
<body>	


	<nav class="navbar navbar-dark bg-primary">
			<a href="" class="navbar-brand">Lavanderia</a>
			<a href="{{url('Usuario/nuevo')}}" class="navbar-brand">Nuevo pedido</a>
			<a href="{{url('Usuario/pedidosPendientes')}}" class="navbar-brand">Pedidos pendientes</a>
			<a href="{{url('Usuario/pedidosEntregados')}}" class="navbar-brand">Pedidos entregados</a>
			<a href="" class="navbar-brand"> {{Auth::user()->name}}</a>
			

	</nav>
				<div class="container">

						@yield('content')
	
				</div>	
</body>
</html>