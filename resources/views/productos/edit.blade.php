@extends('layouts.app2')
@section('content')
<center>
    <div style="width:60%;" class="alert alert-secondary" role="alert">
        <form method="POST" action="{{$productos->id}}">
            {{ csrf_field() }}
            <p>Nombre:</p>
            <input name="nombre" value="{{ $productos->nombre }}" style="width:70%;" type="text" class="form-control">
            <br>
            <p>Materia Activa:</p>
            <input name="materiaActiva" value="{{ $productos->materiaActiva}}" style="width:70%;" type="text" class="form-control" >
            <br>
            <p>Numero Registro Sanitario:</p>
            <input name="numeroRegistroSanitario" value="{{ $productos->numeroRegistroSanitario}}" style="width:70%;" type="text" class="form-control" >
            <br>
            <button type="submit" name="editespecie" class="btn btn-success">{{ __("Editar") }}</button> &nbsp;           
            <a href="{{ url('/productos') }}"> 
                <button type="button" class="btn btn-danger">Cancelar</button> &nbsp;
            </a>
        </form>
        <br>  
    </div>
</center>
@endsection