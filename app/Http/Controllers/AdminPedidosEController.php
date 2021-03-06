<?php

namespace Lavanderia\Http\Controllers;

use Illuminate\Http\Request;
use Lavanderia\HistorialP;
use Lavanderia\User;
use Illuminate\Support\Facades\DB;

class AdminPedidosEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $request->user()->authorizeRoles('admin');
        $usuarios = User::all();
        $pedidos = HistorialP::all();

        return view('Admin.PedidosEntregados',compact('pedidos','usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedido = HistorialP::find($id);
        return view('Admin.edit',compact('pedido','id'));
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
        $pedido = HistorialP::find($id);
        $pedido->Costo=$request->get('Costo'); 
        $pedido->Tipo_prenda=$request->get('prenda');
        $pedido->Estado=$request->get('status');
        $pedido->save();

        return redirect('admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pedido = HistorialP::find($id);

        $pedido->delete();
        return redirect('admin')->with('Satisfactorio','Pedido eliminado');
    }
}
