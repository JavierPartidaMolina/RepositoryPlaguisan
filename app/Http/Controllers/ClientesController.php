<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;
class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = clientes::first();
        return view("clientes.detail",compact('cliente'));
    }

    public function index2($id)
    {
        $cliente = clientes::find($id);
        return view("clientes.detail",compact('cliente'));
    }

    public function find(Request $request)
    {
        if(clientes::where('razonSocial', 'like', '%'.$request->palabra.'%')->get()->isEmpty()){
            return redirect('/clientes')->with('error', "No se encontró ningun cliente");
        }else{
            $cliente = clientes::where('razonSocial', 'like', '%'.$request->palabra.'%')->get();
            return view("clientes.find",compact('cliente'));
        }     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("clientes.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente= clientes::create($request->all());
        return view("clientes.detail", compact('cliente'))->with('correcto',"Cliente añadido correctamente");
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
        $cliente = clientes::find($id);
        return view("clientes.edit", compact('cliente'));
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
        $cliente = clientes::find($id);
        $cliente -> razonSocial = $request -> razonSocial;
        $cliente -> personaContacto = $request -> personaContacto;
        $cliente -> cif = $request -> cif;
        $cliente -> telefono = $request -> telefono;
        $cliente -> localidad = $request -> localidad;
        $cliente -> provincia = $request -> provincia;
        $cliente -> direccion = $request -> direccion;
        $cliente -> save();
        return view("clientes.detail", compact('cliente'))->with('correcto',"Cliente editado correctamente");
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
