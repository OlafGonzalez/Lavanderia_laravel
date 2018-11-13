@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  @if(Auth::user()->hasRole('admin'))
                 <div>Acceso como administrador</div>
                 <form action="admin">
                      <button type="submit" class="btn btn-success btn-lg btn-block">Acceder</button>
                  </div>

                  </form>
                 @else
                 <div align="center">

                  <div><h1>Acceso de usuario</h1></div>
                                        
                  <form action="/Usuario/nuevo">
                      <button type="submit" class="btn btn-success btn-lg btn-block">Acceder</button>
                  </div>

                  </form>
                  @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
