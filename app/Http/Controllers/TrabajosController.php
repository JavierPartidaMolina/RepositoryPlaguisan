<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;
use App\productos;
use App\listados;
use App\trabajos;
use App\pegatinas;
use App\contratos;
use App\facturas;

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
            $servicio = trabajos::create([
                'idCliente' => $request->cliente,
                'idFactura' => null,
                'idDiagnosis' => null,
                'idCertificado' => null,
                'idContrato' => null,
                'idPegatina' => null,
            ]);
            $servicio->save();
            $listado= listados::create($request->all());
            $cliente = clientes::find($request->cliente);
            $nombre = $cliente -> razonSocial;
            $listado -> cliente = $nombre;
            $fech = \Carbon\Carbon::parse($listado -> fecha)->addYear();
            $listado -> fecha = $fech;
            $listado -> save();
            return view("servicios.add",compact('cliente', 'servicio'));
        }
        
    }
    
    public function pegatina($id, $fech,$servicio){
        $servicio2 = trabajos::find($servicio);
        $pegatinaExiste = null;
        if ($servicio2->idPegatina != null) {
            $pegatinaExiste = pegatinas::find($servicio2->idPegatina);
        }
        $cliente = clientes::find($id);
        $fecha= \Carbon\Carbon::parse($fech)->format('d-m-Y');
        $fecha2 = \Carbon\Carbon::parse($fech)->addYear()->format('d-m-Y');
        $productos = productos::All();
        return view("servicios.pegatina",compact('cliente','fecha','productos','fecha2','servicio','servicio2','pegatinaExiste'));
    }

    public function contrato($id, $fech,$servicio){
        $servicio2 = trabajos::find($servicio);
        $contratoExiste = null;
        if ($servicio2->idContrato != null) {
            $contratoExiste = contratos::find($servicio2->idContrato);
        }
        $cliente = clientes::find($id);
        $fecha= \Carbon\Carbon::parse($fech)->format('d-m-Y');
        $fecha2 = \Carbon\Carbon::parse($fech)->addYear()->format('d-m-Y');

        return view("servicios.contrato",compact('cliente','fecha','fecha2','servicio','servicio2','contratoExiste'));
    }

    public function factura($id,$servicio){
        $servicio2 = trabajos::find($servicio);
        $facturaExiste = null;
        if ($servicio2->idFactura != null) {
            $facturaExiste = facturas::find($servicio2->idFactura);
        }
        $cliente = clientes::find($id);


        return view("servicios.factura",compact('cliente','servicio','servicio2','facturaExiste'));
    }

    public function serviciosCliente($id){
        $servicios = trabajos::where('idCliente', $id)->get();
        return view("servicios.serviciosCliente",compact('servicios'));
    }

    public function verServicio($servicio){
        $servicio = trabajos::find($servicio);
        $cliente = clientes::find($servicio->idCliente);
        return view("servicios.add",compact('cliente','servicio'));
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
