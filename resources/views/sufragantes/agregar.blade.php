@extends('layouts.plantilla')

@section('title', 'Registro de Sufragantes')

@section('content')

    <h3>Agregar Un Nuevo Sufragante</h3>
    <div class="container">
        <form action="{{ route('user.crear') }}" method="post">
            @csrf
            <label>Cédula</label>
            <input type="text" name="cedula" />
            <br>
            <label>Nombres</label>
            <input type="text" name="nombres" />
            <br>
            <label>Apellidos</label>
            <input type="text" name="apellidos" />
            <br>
            <label>Celular</label>
            <input type="text" name="number" />
            <br>
            <label>Correo</label>
            <input type="email" name="email" />
            <br>
            <label>fecha de Nacimiento</label>
            <input type="date" name="date" />
            <br>
            <button type="submit">Guardar Registro</button></button>

        </form>

    @endsection
