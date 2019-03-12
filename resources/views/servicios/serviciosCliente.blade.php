@extends('layouts.app2')
@section('content')
<center>
    <table style="width:30%;" class="table table-striped table-hover">
        <tr class="bg-dark">
            <td style="color:#fff;">Fecha</td>

            <td style="color:#fff;"></td>
        @foreach($servicios as $servicio)
        <tr scope="row">
            <td scope="col">
                {{$servicio->created_at->format('d/m/Y')}}
            </td>
            <td>  
                <a type="button"  href="{{ route ('verServicio', ['servicio'=> $servicio]) }}" style="color:white;" class="btn btn-primary">
                    Ver
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