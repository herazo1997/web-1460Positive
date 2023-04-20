@extends('layouts.plantilla')

@section('title', 'Editar Sufragantes')

@section('content')

    <h3>Editar Usuarios</h3>
    <div class="container">
        <form action="{{ route('us.update', $usuario->id) }}" method="post">
            @csrf
            @method('PUT')
            <label>Nombres</label>
            <input type="text" name="nombre" value="{{ $usuario->u_nombre }}" />
            <br>
            <label>usuario</label>
            <input type="text" name="usuario" value="{{ $usuario->u_usuario }}" />
            <br>
            <label>Contraseña</label>
            <input type="password" name="password" value="{{ $usuario->u_password }}" />
            <br>
            <label>Correo</label>
            <input type="email" name="emali" value="{{ $usuario->u_email }}" />
            <br>
            <label>Fecha de Registro</label>
            <input type="date" name="fecha" value="{{ $usuario->u_fecha }}" />
            <br>
            <button type="submit">Actualizar Usuario</button></button>

        </form>
    </div>

@endsection
