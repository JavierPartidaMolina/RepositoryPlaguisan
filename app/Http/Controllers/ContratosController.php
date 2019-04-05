<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contratos;
use App\clientes;
use App\trabajos;
use PDF;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($servicio, $producto, $fecha, $fecha2)
    {
        $servicio = trabajos::find($servicio);
        $cliente = clientes::find($servicio->idCliente);
        return view("servicios.add",compact('cliente','fecha','productos','fecha2','servicio'));
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
        $cliente = clientes::where('razonSocial', $request->razonSocial)->get();
        $contrato = contratos::create([
            'idCliente' => $cliente[0]->id,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion,
            'fechaDesde' => $request->fechaA,
            'fechaHasta' => $request->fechaC,
            ]);
        $contrato->save();
        $servicio = trabajos::find($request->servicio);
        $servicio -> idContrato = $contrato->id;
        $servicio -> save();
        return $this->index($request->servicio,$request->producto, $request->fechaA, $request->fechaC);
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
