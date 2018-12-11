@extends('layouts.app2')
@section('content')
<center>
    <div style="width:60%;" class="alert alert-secondary" role="alert">
        <form method="POST" action="{{$cliente->id}}">
            {{ csrf_field() }}
            <table style="width:110%;">
                <tr>
                    <td>
                        <p>Identificador:</p>
                        <input name="id" value="{{$cliente->id}}" style="width:70%;" type="number" class="form-control" readonly>
                        <br>
                        <p>Razón Social:</p>
                        <input name="razonSocial" value="{{$cliente->razonSocial}}" style="width:70%;" type="text" class="form-control" >
                        <br>
                        <p>Persona de Contacto:</p>
                        <input name="personaContacto" value="{{$cliente->personaContacto}}" style="width:70%;" type="text" class="form-control" >
                        <br>
                        <p>Dirección:</p>
                        <input name="direccion" value="{{$cliente->direccion}}" style="width:70%;" type="text" class="form-control" >
                    </td>
                    <td>
                        <p>Localidad:</p>
                        <input name="localidad" value="{{$cliente->localidad}}" style="width:70%;" type="text" class="form-control" >
                        <br>
                        <p>Provincia:</p>
                        <input name="provincia" value="{{$cliente->provincia}}" style="width:70%;" type="text" class="form-control" >
                        <br>
                        <p>CIF:</p>
                        <input name="cif" value="{{$cliente->cif}}" style="width:70%;" type="text" class="form-control" >
                        <br>
                        <p>Teléfono:</p>
                        <input name="telefono" value="{{$cliente->telefono}}" style="width:70%;" type="text" class="form-control" >
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <button type="submit" name="editcliente" class="btn btn-success">{{ __("Editar") }}</button> &nbsp;           
        
        <a href="{{ url('/clientes') }}"> 
            <button type="button" class="btn btn-danger">Cancelar</button> &nbsp;
        </a>
    </form>
        <br>  
    </div>
</center>
@endsection