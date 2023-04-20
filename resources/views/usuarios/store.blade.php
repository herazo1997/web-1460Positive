@extends('layouts.plantilla')

@section('title', 'Registro de Sufragantes')

@section('content')

    <h3>Agregar Un Nuevo Usuario</h3>
    <div class="container">
        <form action="{{ route('us.crear') }}" method="post">
            @csrf
            <label>Nombres</label>
            <input type="text" name="nombre" />
            <br>
            <label>Usuario</label>
            <input type="text" name="usuario" />
            <br>
            <label>Contraseña</label>
            <input type="password" name="password" />
            <br>
            <label>Correo</label>
            <input type="email" name="email" />
            <br>
            <label>Fecha de Registro</label>
            <input type="date" name="fecha" />
            <br>
            <button type="submit">Guardar Registro</button></button>

        </form>

    @endsection
