@extends('layouts.app2')
@section('content')
<center>
    <div style="width:60%;" class="alert alert-secondary" role="alert">
        <form method="POST" action="{{url('addespecies/')}}">
            {{ csrf_field() }}
            <p>Nombre Cientifico:</p>
            <input name="nombreCientifico" value="{{ old('nombreCientifico') }}" style="width:70%;" type="text" class="form-control">
            <br>
            <p>Nombre Vulgar:</p>
            <input name="nombreVulgar" value="{{ old('nombreVulgar') }}" style="width:70%;" type="text" class="form-control" >
            <br>
            <p>Tipo:</p>
            <select class="form-control" name="tipo" value="{{ old('tipo') }}">
                <option>Insecto</option>
                <option>Roedor</option>
            </select>
            <br>
            <button type="submit" name="addespecies" class="btn btn-success">{{ __("Añadir") }}</button> &nbsp;           
            <a href="{{ url('/especies') }}"> 
                <button type="button" class="btn btn-danger">Cancelar</button> &nbsp;
            </a>
        </form>
        <br>  
    </div>
</center>
@endsection