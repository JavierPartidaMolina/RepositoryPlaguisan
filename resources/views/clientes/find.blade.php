@extends('layouts.app2')
@section('content')
<center>
        <table style="width:60%;" class="table table-striped table-hover">
            <tr class="bg-dark">
                <td style="color:#fff;">Razón social</td>
                <td style="color:#fff;">Dirección</td>
                <td style="color:#fff;"></td>
            @foreach($cliente as $cli)
            <tr scope="row">
                <td scope="col">
                    {{$cli->razonSocial}}
                </td>
                <td scope="col">
                    {{$cli->direccion}}
                </td>
                <td>
                    <a href="clienteBuscado/{{$cli->id}}">
                        <button class="btn btn-primary">Ver</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        <br>
    <br>
    <a href="{{ url('/clientes') }}"> 
        <button type="button" class="btn btn-danger">Volver</button> &nbsp;
    </a>
</center>
@endsection