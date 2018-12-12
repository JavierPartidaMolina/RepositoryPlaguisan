@extends('layouts.app2')
@section('content')

<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>

<center>
    @if (!Empty($error))
        <div style="width:60%;" class="alert alert-danger">
            {{$error}}
        </div>
    @endif
</center>

<div style="with:70%;" class="container">
    <form  method="POST" action="{{url('creatingJob')}}">
        {{ csrf_field() }}
        <div class="jumbotron row justify-content-md-center">
            <div class="col-md-3">
                <h2>Razón social:</h2>
                <select name="cliente" class="selectpicker show-menu-arrow" data-style="form-control" data-live-search="true" title="-- Selecciona un cliente--">
                    <option></option>
                    @foreach($clientes as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->razonSocial}}</option>
                    @endforeach
                </select>
                <br>
                <h2>Fecha:</h2>
                <input name="fecha" type="date" class="form-control" value="{{ \Carbon\Carbon::today()->format('Y-m-d') }}">
            
            </div>
        </div>
        <center>
            <button class="btn btn-primary">Crear</button>
    </form>
        </center>
<div>
@endsection