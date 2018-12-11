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
                <td style="color:#fff;">Nombre vulgar</td>
                <td style="color:#fff;">Nombre cientifico</td>
                <td style="color:#fff;">Tipo</td>
                <td style="color:#fff;"></td>
            @foreach($especies as $especie)
            <tr scope="row">
                <td scope="col">
                    {{$especie->nombreCientifico}}
                </td>
                <td scope="col">
                    {{$especie->nombreVulgar}}
                </td>
                <td scope="col">
                    {{$especie->tipo}}
                </td>
                <td>
                    <a href="/plaguisan/public/editespecie/{{$especie->id}}">
                        <button class="btn btn-primary">Editar</button>
                    </a> 
                </td>
            </tr>
            @endforeach
        </table>
        <br>
        <a href="/plaguisan/public/addespecie/">
            <button class="btn btn-primary">Añadir</button>
        </a> 
    <br>
</center>
@endsection