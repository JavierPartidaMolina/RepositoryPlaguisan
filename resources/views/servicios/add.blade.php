
@extends('layouts.app2')
@section('content')
<center>
        @if (\Session::has('error'))
            <div style="width:60%;" class="alert alert-danger">
                {!! \Session::get('error') !!}
            </div>
        @endif
        @if (!empty($correcto))
            <div style="width:60%;"  class="alert alert-primary">
                    {{ $correcto }}
            </div>
        @endif
    <div style="width:60%;" class="alert alert-secondary" role="alert">
        <table style="width:110%;">
            <tr>
                <td>
                    <p>Identificador:</p>
                    <input value="{{$cliente->id}}" style="width:70%;" type="number" class="form-control" readonly>
                    <br>
                    <p>Razón Social:</p>
                    <input value="{{$cliente->razonSocial}}" style="width:70%;" type="text" class="form-control" readonly>
                    <br>
                    <br>     
                </td>
                <td>
                    <p>Dirección:</p>
                        <input value="{{$cliente->direccion}}" style="width:70%;" type="text" class="form-control" readonly>
                    <br>
                    <p>Fecha de servicio:</p>
                        <input value="{{$servicio->fecha}}" style="width:70%;" type="text" class="form-control" readonly>
                    <br> 
                    <br>
                </td>
            </tr>
        </table>
        <br>

        @if ($servicio->idDiagnosis == null)
            <a type="button" style="color:white;" class="btn btn-primary">Diagnosis</a>
        @else
            <a type="button" style="color:white;" class="btn btn-success">Diagnosis</a>
        @endif

        @if ($servicio->idCertificado == null)
            <a type="button" style="color:white;" class="btn btn-primary">Certificado</a>
        @else
            <a type="button" style="color:white;" class="btn btn-success">Certificado</a>
        @endif

        @if ($servicio->idPegatina == null)
            <a type="button" style="color:white;" href="{{url('pegatina/'.$cliente->id.'/'.$servicio->created_at.'/'.$servicio->id)}}" class = "btn btn-primary">Pegatina</a>
        @else
            <a type="button" style="color:white;" href="{{url('pegatina/'.$cliente->id.'/'.$servicio->created_at.'/'.$servicio->id)}}" class = "btn btn-success">Pegatina</a>
        @endif

        @if ($servicio->idContrato == null)
            <a type="button" style="color:white;" class="btn btn-primary">Contrato</a>
        @else
            <a type="button" style="color:white;" class="btn btn-success">Contrato</a>
        @endif

        @if ($servicio->idFactura == null)
            <a type="button" style="color:white;" class="btn btn-primary">Factura</a>
        @else
            <a type="button" style="color:white;" class="btn btn-success">Factura</a>
        @endif
    </div>
</center>
@endsection