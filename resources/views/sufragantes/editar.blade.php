@extends('layouts.plantilla')

@section('title', 'Editar Sufragantes')

@section('content')

<h3>Editar Sufragante</h3>
    <div class="container">
    <form action="" method="post">
        @csrf
        <label>Cédula</label>
        <input vaule = "" type="text" name="cedula"/>
        <br>
        <label>Nombres</label>
        <input vaule = "" type="text" name="nombres"/>
        <br>
        <label>Apellidos</label>
        <input vaule = "" type="text" name="apellidos"/>
        <br>
        <label>Celular</label>
        <input vaule = "" type="number" name="number"/>
        <br>
        <label>Correo</label>
        <input vaule = "" type="email" name="email"/>
        <br>
        <label>fecha de Nacimiento</label>
        <input vaule = "" type="date" name="date"/>
        <br>
        <button type="submit">Guardar Registro</button></button>

    </form>
</div>

@endsection
