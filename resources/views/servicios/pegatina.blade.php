@extends('layouts.app2')
@section('content')

<div class="jumbotron  row justify-content-md-center">
    <div class="col-md-10">
        <table style="width:100%;">
            <tr>
                <td>
                    <h4>Razón social:</h4>
                    <input style="width:70%" name="razonSocial" type="text" class="form-control" value="{{$cliente->razonSocial}}" readonly>
                    <br>
                    <h4>Situado en:</h4>
                    <input style="width:70%" name="situadoEn" type="text" class="form-control" value="{{$cliente->localidad}}" readonly>
                    <br>
                    <h4>Calle:</h4>
                    <input style="width:70%" name="situadoEn" type="text" class="form-control" value="{{$cliente->direccion}}" readonly>
                    <br>
                    <h4>Fecha:</h4>
                    <input style="width:70%" name="fecha" type="text" class="form-control" value="{{ $fecha }}">
                </td>
                <td>
                    <h4>Propiedad de:</h4>
                    <input style="width:70%" name="propiedadDe" type="text" class="form-control" value="{{$cliente->personaContacto}}" readonly>
                    <br>
                    <h4>Agente Nocivo a combatir:</h4>
                    <select style="width: 70%;" class="form-control" name="tipo" value="{{ old('tipo') }}">
                        <option>Insecto</option>
                        <option>Roedor</option>
                    </select>
                    <br>
                    <h4>Pruducto utilizado:</h4>
                    <select style="width:70%" name="producto" class="form-control">
                        @foreach($productos as $producto)
                            <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                        @endforeach
                    </select>
                    <br>
                    <h4>Fecha:</h4>
                    <input style="width:70%" name="fecha" type="text" class="form-control" value="{{ $fecha2 }}">
                </td>
            </tr>
        </table>
    </div>
</div>
<center>
    <button class="btn btn-primary">Crear</button>
</form>
</center>

@endsection