@extends('layouts.app')

@section('content')

<h1>Nuevo Usuario</h1>

<form action="{{ route('usuarios.store') }}" method="POST">
    @csrf

    <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2">
    <input type="email" name="email" placeholder="Email" class="form-control mb-2">

    <button class="btn btn-primary">Guardar</button>
</form>

@endsection