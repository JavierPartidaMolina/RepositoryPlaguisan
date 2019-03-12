@extends('layouts.app2')
@section('content')

<center>
    <div style="width:60%;" class="alert alert-secondary" role="alert">
        <form method="POST" action="{{url('addPegatina/')}}">
            {{ csrf_field() }}
        <table style="width:100%;">
            <tr>
                <td>
                    <p>Razón social:</p>
                    <input style="width:70%" name="razonSocial" type="text" class="form-control" value="{{$cliente->razonSocial}}" readonly>
                    <br>
                    <p>Situado en:</p>
                    <input style="width:70%" name="situadoEn" type="text" class="form-control" value="{{$cliente->localidad}}" readonly>
                    <br>
                    <p>Propiedad de:</p>
                    <input style="width:70%" name="propiedadDe" type="text" class="form-control" value="{{$cliente->personaContacto}}" readonly>
                    <br>
                    <p>Fecha de aplicación:</p>
                    <input style="width:70%" name="fechaA" type="text" class="form-control" value="{{ $fecha }}">
                </td>
                <td>
                    <p>Agente Nocivo a combatir:</p>
                    <select style="width: 70%;" class="form-control" name="tipo" value="{{ old('tipo') }}">
                        <option>Insecto</option>
                        <option>Roedor</option>
                    </select>
                    <br>
                    <p>Producto utilizado:</p>
                    <select style="width:70%" name="producto" class="form-control">
                        @foreach($productos as $producto)
                            <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                        @endforeach
                    </select>
                    <br>
                    <p>Dosis:</p>
                    @if ($pegatinaExiste != null)
                        <input style="width:70%" name="dosis" type="number" class="form-control" value="{{$pegatinaExiste->dosis}}">
                    @else
                        <input style="width:70%" name="dosis" type="number" class="form-control" >
                    @endif
                    <br>
                    <p>Fecha de caducidad:</p>
                    <input style="width:70%" name="fechaC" type="text" class="form-control" value="{{ $fecha2 }}">
                    <input name="servicio" type="hidden" class="form-control" value="{{ $servicio }}">

                </td>
            </tr>
        </table>
        <br>
    
        @if ($servicio2->idPegatina == null)
            <button type="submit" style="color:white;" class="btn btn-primary">Crear</button>
        
        @else
     </form>
            <form action="{{route('pdfPegatina', ['pegatina' => $servicio2->idPegatina])}}">
                {{csrf_field()}}
                <button type="submit" class="btn btn-primary">Imprimir</button>
            <form>
            <button type="button" style="color:white;" class="btn btn-danger">Eliminar</button>

        @endif
    
    </div>

@endsection