<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listados;
use App\clientes;
use PDF;

class ListadosController extends Controller
{
    public function index()
    {
        $listados = listados::All();
        return view("listados.detail",compact('listados'));
    }

    public function buscar(Request $request){
        $listados = listados::whereYear('fecha','=',$request -> año)->whereMonth('fecha','=',$request -> mes)->get();
        if($listados->isEmpty()){
            return view("listados.detail",compact('listados'))->with('error', "No se encontró ningun servicio en que coincida con las credenciales");
        }else{
            return view("listados.detail",compact('listados'));
        }   
    }

    public function pdf($mes,$año){
        $listados = listados::whereYear('fecha','=',$año)->whereMonth('fecha','=',$mes)->get();
        $pdf = PDF::loadView('listados.pdf',compact('listados'));
        return $pdf->download('listados.pdf');
    }
}
