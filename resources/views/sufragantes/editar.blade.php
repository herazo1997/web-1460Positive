@extends('layouts.plantilla')

@section('title', 'Editar Sufragantes')

@section('content')

<h3>Editar Sufragante</h3>
    <div class="container">
    <form action="{{route('user.update', $listados->id)}}" method="post">
        @csrf
        @method('PUT')
        <label>Cédula</label>
        <input type="text" name="cedula" value="{{$listados->su_cedula}}"/>
        <br>
        <label>Nombres</label>
        <input type="text" name="nombres" value="{{$listados->su_nombres}}"/>
        <br>
        <label>Apellidos</label>
        <input type="text" name="apellidos" value="{{$listados->su_apellidos}}"/>
        <br>
        <label>Celular</label>
        <input type="text" name="number" value="{{$listados->su_celular}}"/>
        <br>
        <label>Correo</label>
        <input type="email" name="email" value="{{$listados->su_email}}"/>
        <br>
        <label>fecha de Nacimiento</label>
        <input type="date" name="date" value="{{$listados->su_fecha_nacimiento}}"/>
        <br>
        <button type="submit">Guardar Registro</button></button>

    </form>
</div>

@endsection
