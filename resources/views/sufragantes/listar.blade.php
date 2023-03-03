@extends('layouts.plantilla')

@section('title', 'Lista de Sufragantes')

@section('content')

<h3>Listado de Sufragantes</h3>
  <div class="container text-center">
    <div class="row align-items-start">
    <table class="table table-bordered border-dark">
        <thead>
          <tr>
            <th class="table-info" scope="col">Operaciones</th>
            <th class="table-info" scope="col">Cantidad</th>
            <th class="table-info" scope="col">Código</th>
            <th class="table-info" scope="col">Cédula</th>
            <th class="table-info" scope="col">Nombres</th>
            <th class="table-info" scope="col">Apellidos</th>
            <th class="table-info" scope="col">Celular</th>
            <th class="table-info" scope="col">Correo</th>
            <th class="table-info" scope="col">Fecha de Nacimiento</th>
            <th class="table-info" scope="col">Fecha de Registro</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @php
             $codigo=1; 
          @endphp
        @foreach($listado as $listado)
          <tr>
            <td class="table-info">Editar  Eliminar</td>
            <td class="table-info">{{$codigo++}}</td>
            <td class="table-info">{{$listado->id}}</td>
            <td class="table-info">{{$listado->su_cedula}}</td>
            <td class="table-info">{{$listado->su_nombres}}</td>
            <td class="table-info">{{$listado->su_apellidos}}</td>
            <td class="table-info">{{$listado->su_celular}}</td>
            <td class="table-info">{{$listado->su_email}}</td>
            <td class="table-info">{{$listado->su_fecha_nacimiento}}</td>
            <td class="table-info">{{$listado->created_at}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{-- {{$user->links()}} --}}
    </div>
</div>
@endsection
