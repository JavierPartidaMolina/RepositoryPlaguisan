<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\especies;

class EspeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especies = especies::All();
        return view("especies.detail", compact('especies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("especies.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $especies= especies::create($request->all());
        $especies = especies::All();
        return view("especies.detail", compact('especies'))->with('correcto',"Especie añadida correctamente");
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
        $especies = especies::find($id);
        return view("especies.edit", compact('especies'));
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
        $especies = especies::find($id);
        $especies -> nombreCientifico = $request -> nombreCientifico;
        $especies -> nombreVulgar = $request -> nombreVulgar;
        $especies -> tipo = $request -> tipo;
        $especies -> save();
        $especies = especies::All();
        return view("especies.detail", compact('especies'))->with('correcto',"Especie editada correctamente");
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
