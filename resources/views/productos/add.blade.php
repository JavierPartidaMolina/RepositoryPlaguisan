@extends('layouts.app2')
@section('content')
<center>
    <div style="width:60%;" class="alert alert-secondary" role="alert">
        <form method="POST" action="{{url('addproducto/')}}">
            {{ csrf_field() }}
            <p>Nombre:</p>
            <input name="nombre" value="{{ old('nombre')}}" style="width:70%;" type="text" class="form-control">
            <br>
            <p>Materia Activa:</p>
            <input name="materiaActiva" value="{{ old('materiaActiva') }}" style="width:70%;" type="text" class="form-control" >
            <br>
            <p>Numero Registro Sanitario:</p>
            <input name="numeroRegistroSanitario" value="{{  old('numeroRegistroSanitario') }}" style="width:70%;" type="text" class="form-control" >
            <br>
            <button type="submit" name="addproductos" class="btn btn-success">{{ __("Añadir") }}</button> &nbsp;           
            <a href="{{ url('/productos') }}"> 
                <button type="button" class="btn btn-danger">Cancelar</button> &nbsp;
            </a>
        </form>
        <br>  
    </div>
</center>
@endsection