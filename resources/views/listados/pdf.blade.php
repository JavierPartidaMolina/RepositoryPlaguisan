@extends('layouts.app3')
<center>
    <div style="background-color: #fff; ">
    <h2 style="text-decoration: underline;">LISTADO DE VENCIMIENTO</h2>
    <br>
    <table style="width: 80%; text-align: left; margin: 0 auto;" class="table table-striped table-hover">
            <tr style="background-color: #fff; ">
                <td><u>Cliente</u></td>
                <td><u>Fecha</u></td>
            @foreach($listados as $listado)
            <tr scope="row">
                <td scope="col">
                    {{$listado->cliente}}
                </td>
                <td scope="col">
                    {{\Carbon\Carbon::parse($listado->fecha)->format('d-m-Y')}}
                </td>
            </tr>
            @endforeach
        </table>
    
</center>
</div>