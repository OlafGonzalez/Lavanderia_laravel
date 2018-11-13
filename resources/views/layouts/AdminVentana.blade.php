<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<head>
	<meta charset="utf-8">
	<title>Admin - </title>
	<style type="text/css">
		#my_table {
    border-radius: 20px;
    background-color: transparent;
    color: black;
    width: 500px;
    text-align: center;
}
#div1 {
     overflow:scroll;
     height:400px;
    
}
#div1 table {
    
}
	</style>
	 <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>	


	<nav class="navbar navbar-dark bg-primary">
			<a href="" class="navbar-brand">Lavanderia - Admin</a>
			<a href="{{url('admin')}}" class="navbar-brand">Pedidos pendientes</a>
			<a href="{{url('adminPedidos1')}}" class="navbar-brand">Pedidos entregados</a>
			  <a id="navbarDropdown" class="nav-link dropdown-toggle navbar-brand" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
			</nav>
				<div class="container">

						@yield('content')
	
				</div>	
</body>
</html>