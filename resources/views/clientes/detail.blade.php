@extends('layouts.app2')
@section('content')
<center>
        @if (\Session::has('error'))
            <div style="width:60%;" class="alert alert-danger">
                {!! \Session::get('error') !!}
            </div>
        @endif
        @if (!empty($correcto))
            <div style="width:60%;"  class="alert alert-success">
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
                    <p>Persona de Contacto:</p>
                    <input value="{{$cliente->personaContacto}}" style="width:70%;" type="text" class="form-control" readonly>
                    <br>
                    <p>Dirección:</p>
                    <input value="{{$cliente->direccion}}" style="width:70%;" type="text" class="form-control" readonly>
                    <br>
                    <br>
                    <a type="button" href="{{ route ('addcliente') }}" style="color:white;" class="btn btn-primary">
                        Añadir
                    </a>
                    <a type="button"  href="{{ route ('editcliente', ['id'=> $cliente->id]) }}" style="color:white;" class="btn btn-primary">
                       Editar
                    </a>       
                    <a type="button"   href="{{ route ('serviciosCliente', ['id'=> $cliente->id]) }}" style="color:white;" class="btn btn-primary">
                        Servicios
                     </a>    

                </td>
                <td>
                    <p>Localidad:</p>
                    <input value="{{$cliente->localidad}}" style="width:70%;" type="text" class="form-control" readonly>
                    <br>
                    <p>Provincia:</p>
                    <input value="{{$cliente->provincia}}" style="width:70%;" type="text" class="form-control" readonly>
                    <br>
                    <p>CIF:</p>
                    <input value="{{$cliente->cif}}" style="width:70%;" type="text" class="form-control" readonly>
                    <br>
                    <p>Teléfono:</p>
                    <input value="{{$cliente->telefono}}" style="width:70%;" type="text" class="form-control" readonly>
                    <br> 
                    <br>
                    <form method="GET" action="{{url('/findcliente')}}">
                        <div style="width:70%;" class="input-group">
                            <input id="palabra" name="palabra" type="text" class="form-control" placeholder="Razón social">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Buscar</button>
                            </span>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
        <br>
    </div>
</center>
@endsection