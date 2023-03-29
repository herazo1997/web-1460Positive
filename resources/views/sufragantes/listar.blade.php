@extends('layouts.plantilla')

@section('title', 'Lista de Sufragantes')

@section('content')

<h3>Listado De Sufragantes</h3>
  <div class="container text-center">
    <div class="row align-items-start">
    <table class="table table-bordered border-dark">
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
            <th class="table-info" scope="col">Operaciones</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          
        @foreach($listado as $listados)
          <tr>
            <td class="table-info">{{$listados->id}}</td>
            <td class="table-info">{{$listados->su_cedula}}</td>
            <td class="table-info">{{$listados->su_nombres}}</td>
            <td class="table-info">{{$listados->su_apellidos}}</td>
            <td class="table-info">{{$listados->su_celular}}</td>
            <td class="table-info">{{$listados->su_email}}</td>
            <td class="table-info">{{$listados->su_fecha_nacimiento}}</td>
            <td class="table-info">{{$listados->created_at}}</td>
            <td class="table-info">Editar  Eliminar</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$listado->appends(request()->query())->links('pagination::bootstrap-4')}}
    </div>
</div>
@endsection
