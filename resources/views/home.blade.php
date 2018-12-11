@extends('layouts.app2')
@section('content')
<center>
    <br>
    <br>
    <div style="width: 60%;" class="alert alert-success" role="alert">
        <h4 class="alert-heading">Información</h4>
        <p>Bienbenido/a {{ Auth::user()->name }}.</p>
        <hr>
        <p class="mb-0"></p>
    </div>
</center>
@endsection
