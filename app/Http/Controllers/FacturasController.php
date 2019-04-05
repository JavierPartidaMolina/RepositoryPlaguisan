<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\facturas;
use App\clientes;
use App\trabajos;
use PDF;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($servicio)
    {
        $servicio = trabajos::find($servicio);
        $cliente = clientes::find($servicio->idCliente);
        return view("servicios.add",compact('cliente', 'servicio'));
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
        $factura = facturas::create([
            'idCliente' => $cliente[0]->id,
            'precio' => $request->precio,
            'descripcion' => $request->descripcion,
            ]);
        $factura->save();
        $servicio = trabajos::find($request->servicio);
        $servicio -> idFactura = $factura->id;
        $servicio -> save();
        return $this->index($request->servicio);
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
