@extends('layouts.plantilla')

@section('title', 'Lista de Sufragantes')

@section('content')

    <div class="container">
        <h3>Listado De Sufragantes</h3>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-auto my-1">
                    <a href="{{ route('user.crear') }}" class="btn btn-success">Agregar Nuevo</a>
                </div>

                <div class="container text-center">
                    <div class="table-responsive-sm">

                        <table class="table table-bordered border-dark table-sm">
                            <thead>
                                <tr>
                                    <th class="table-info" scope="col">Código</th>
                                    <th class="table-info" scope="col">Cédula</th>
                                    <th class="table-info" scope="col">Nombres</th>
                                    <th class="table-info" scope="col">Apellidos</th>
                                    <th class="table-info" scope="col">Celular</th>
                                    <th class="table-info" scope="col">Correo</th>
                                    <th class="table-info" scope="col">Fecha de Nacimiento</th>
                                    <th class="table-info" scope="col">Fecha de Registro</th>
                                    <th class="table-info" scope="col">Fecha de Actualizacion</th>
                                    <th class="table-info" scope="col">Opciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">

                                @foreach ($listado as $listados)
                                    <tr>
                                        <td class="table-info">{{ $listados->id }}</td>
                                        <td class="table-info">{{ $listados->su_cedula }}</td>
                                        <td class="table-info">{{ $listados->su_nombres }}</td>
                                        <td class="table-info">{{ $listados->su_apellidos }}</td>
                                        <td class="table-info">{{ $listados->su_celular }}</td>
                                        <td class="table-info">{{ $listados->su_email }}</td>
                                        <td class="table-info">{{ $listados->su_fecha_nacimiento }}</td>
                                        <td class="table-info">{{ $listados->created_at }}</td>
                                        <td class="table-info">{{ $listados->updated_at }}</td>
                                        <td class="table-info"> <a href="{{ route('user.edit', $listados->id) }}"
                                                class="btn btn-warning btn-sm"> Editar </a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#modal-delete-{{ $listados->id }}">
                                                Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                    @include('sufragantes.delete')
                                @endforeach
                            </tbody>
                        </table>
                        {{ $listado->appends(request()->query())->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
