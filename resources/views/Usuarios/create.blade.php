@extends('layouts.app')

@section('title','Registrate')

@section('content')
<div>
<form class="from-group" method="POST"  action="/Login">

    @csrf
    <div class="from-group">
        <label for="">Nombre</label>
        <input type="text" name="name" class="form-control">
    </div>
<button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>




@endsection



