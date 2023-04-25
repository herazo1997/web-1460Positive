@extends('layouts.plantilla')

@section('title', 'Lista de Usuarios')

@section('content')
    <div class="container">
        <h3>Listado De Usuarios</h3>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-auto my-1">
                    <a href="{{ route('us.mostrar') }}" class="btn btn-success">Agregar Usuario</a>
                </div>

                <div class="container text-center">
                    <div class="table-responsive-sm">

                        <table class="table table-bordered border-dark table-sm">
                            <thead>
                                <tr>
                                    <th class="table-info" scope="col">ID</th>
                                    <th class="table-info" scope="col">Nombres</th>
                                    <th class="table-info" scope="col">Usuario</th>
                                    <th class="table-info" scope="col">Contraseña</th>
                                    <th class="table-info" scope="col">Correo</th>
                                    <th class="table-info" scope="col">Fecha de Registro</th>
                                    <th class="table-info" scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">

                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td class="table-info">{{ $usuario->id_usuario }}</td>
                                        <td class="table-info">{{ $usuario->u_nombre }}</td>
                                        <td class="table-info">{{ $usuario->u_usuario }}</td>
                                        <td class="table-info">{{ $usuario->u_password }}</td>
                                        <td class="table-info">{{ $usuario->u_email }}</td>
                                        <td class="table-info">{{ $usuario->u_fecha }}</td>

                                        <td class="table-info"> <a href="{{ route('us.edit', $usuario->id_usuario) }}"
                                                class="btn btn-warning btn-sm"> Editar </a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modal-delete-{{ $usuario->id_usuario }}">                    
                                                Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                    @include('usuarios.delete')
                                @endforeach
                            </tbody>
                        </table>
                        
                        {{ $usuarios->appends(request()->query())->links('pagination::bootstrap-5') }}

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
