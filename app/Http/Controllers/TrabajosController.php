<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;
use App\productos;
use App\listados;

class TrabajosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = clientes::All();
        return view("servicios.detail",compact('clientes'));
    }

    public function creating(Request $request)
    {
        if($request->cliente==""){
            $clientes = clientes::All();
            return view("servicios.detail",compact('clientes'))->with('error',"Debe seleccionar un cliente");
        }else{
            $listado= listados::create($request->all());
            $cliente = clientes::find($request->cliente);
            $nombre = $cliente -> razonSocial;
            $listado -> cliente = $nombre;
            $fech = \Carbon\Carbon::parse($listado -> fecha)->addYear();
            $listado -> fecha = $fech;
            $listado -> save();
            $fecha = \Carbon\Carbon::parse($request->fecha)->format('d-m-Y');
            return view("servicios.add",compact('cliente', 'fecha'));
        }
        
    }
    
    public function pegatina($id, $fech){
        $cliente = clientes::find($id);
        $fecha= $fech;
        $fecha2 = \Carbon\Carbon::parse($fech)->addYear()->format('d-m-Y');
        $productos = productos::All();
        return view("servicios.pegatina",compact('cliente','fecha','productos','fecha2'));
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
