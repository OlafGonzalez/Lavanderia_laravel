<?php

namespace Lavanderia\Http\Controllers;

use Illuminate\Http\Request;
use Lavanderia\HistorialP;
use Lavanderia\User;

use Illuminate\Support\Facades\Auth;

class UserrrConTroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('Usuarios.user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $pedido = new HistorialP;
        $user = Auth::user();

        $pedido -> numeroprenda = $request->input('noprenda');
        $pedido -> cliente_id =$user->id;
        $pedido -> fecha_recibido = $request->input('fecha');
        $pedido -> fecha_entragado = null;
        $pedido -> Tipo_prenda = $request->input('prenda');
        $pedido -> Estado = 'Espera';
        $pedido -> Costo = null;

        $pedido ->save();

        return 'Guardado';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
