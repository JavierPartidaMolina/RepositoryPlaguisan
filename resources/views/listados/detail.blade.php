@extends('layouts.app2')
@section('content')
<center>
        @if (!empty($error))
            <div style="width:60%;" class="alert alert-danger">
                    {{ $error }}
            </div>
        @endif
        <center>
           
            <form method="POST" action="{{url('/buscarListado')}}">
                {{ csrf_field() }}
                <table style="width:60%;" class="table table-striped">
                    <tr>
                        <td>
                            <select class="form-control" id="mes" name="mes">
                                <option value="1">Enero</option>
                                <option value="2">Febrero</option>
                                <option value="3">Marzo</option>
                                <option value="4">Abril</option>
                                <option value="5">Mayo</option>
                                <option value="6">Junio</option>
                                <option value="7">Julio</option>
                                <option value="8">Agosto</option>
                                <option value="9">Septiembre</option>
                                <option value="10">Octubre</option>
                                <option value="11">Noviembre</option>
                                <option value="12">Diciembre</option>
                            </select>
                        </td>
                        <td>
                            <input type="number" class="form-control" name="año" value="{{\Carbon\Carbon::now()->addYear()->format('Y')}}">
                        </td>
                        <td>
                            <button type="submit" class="btn btn-primary">
                                Buscar
                            </button>
                        </td>
                    <tr>
                </table>
            </form>
        </center>
        @if (empty($error))
        <table style="width:60%;" class="table table-striped table-hover">
            <tr class="bg-dark">
                <td style="color:#fff;">Cliente</td>
                <td style="color:#fff;">Fecha</td>
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
    <br>
    <form action="{{route('pdfListado', ['mes' => \Carbon\Carbon::parse($listado->fecha)->format('m'),
    'año' => \Carbon\Carbon::parse($listado->fecha)->format('Y')])}}">
        {{csrf_field()}}
        <button type="submit" class="btn btn-primary">Imprimir</button>
    @endif
    <form>
</center>
@endsection