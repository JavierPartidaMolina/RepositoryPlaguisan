
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
                        <input value="{{$fecha}}" style="width:70%;" type="text" class="form-control" readonly>
                    <br> 
                    <br>
                </td>
            </tr>
        </table>
        <br>
        <button type="button" class="btn btn-primary">Diagnosis<button>
        <button type="button" class="btn btn-primary">Certificado<button>
        <button type="button" class="btn btn-primary">Pegatina<button>
        <button type="button" class="btn btn-primary">Contrato<button>
        <button type="button" class="btn btn-primary">Factura<button>
    </div>
</center>
@endsection