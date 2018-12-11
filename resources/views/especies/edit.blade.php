@extends('layouts.app2')
@section('content')
<center>
    <div style="width:60%;" class="alert alert-secondary" role="alert">
        <form method="POST" action="{{$especies->id}}">
            {{ csrf_field() }}
            <p>Nombre Cientifico:</p>
            <input name="nombreCientifico" value="{{ $especies->nombreCientifico }}" style="width:70%;" type="text" class="form-control">
            <br>
            <p>Nombre Vulgar:</p>
            <input name="nombreVulgar" value="{{ $especies->nombreVulgar}}" style="width:70%;" type="text" class="form-control" >
            <br>
            <p>Tipo:</p>
            @if ($especies->tipo == "Roedor")
                <select class="form-control" name="tipo" value="{{ $especies->tipo}}">
                    <option>Insecto</option>
                    <option selected>Roedor</option>
                </select>
             @endif
             @if ($especies->tipo == "Insecto")
                <select class="form-control" name="tipo" value="{{ $especies->tipo}}">
                    <option selected>Insecto</option>
                    <option>Roedor</option>
                </select>
             @endif
            <br>
            <button type="submit" name="editespecie" class="btn btn-success">{{ __("Editar") }}</button> &nbsp;           
            <a href="{{ url('/especies') }}"> 
                <button type="button" class="btn btn-danger">Cancelar</button> &nbsp;
            </a>
        </form>
        <br>  
    </div>
</center>
@endsection