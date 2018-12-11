@extends('layouts.app2')
@section('content')
<center>
        @if (!empty($correcto))
            <div style="width:60%;"  class="alert alert-success">
                    {{ $correcto }}
            </div>
        @endif
        <table style="width:60%;" class="table table-striped table-hover">
            <tr class="bg-dark">
                <td style="color:#fff;">Nombre</td>
                <td style="color:#fff;">Materia Activa</td>
                <td style="color:#fff;">Número Registro Sanitario</td>
                <td style="color:#fff;"></td>
            @foreach($productos as $producto)
            <tr scope="row">
                <td scope="col">
                    {{$producto->nombre}}
                </td>
                <td scope="col">
                    {{$producto->materiaActiva}}
                </td>
                <td scope="col">
                    {{$producto->numeroRegistroSanitario}}
                </td>
                <td>
                    <a href="/plaguisan/public/editproducto/{{$producto->id}}">
                        <button class="btn btn-primary">Editar</button>
                    </a> 
                </td>
            </tr>
            @endforeach
        </table>
        <br>
        <a href="/plaguisan/public/addproducto/">
            <button class="btn btn-primary">Añadir</button>
        </a> 
    <br>
</center>
@endsection