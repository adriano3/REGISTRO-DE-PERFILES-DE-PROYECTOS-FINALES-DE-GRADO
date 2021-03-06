@extends('plantilla')
@section('contenido')

    <h1 class="display-4 font-weight-bold">Lista de Roles del Sistema</h1>
    <div class="mb-3">
        <a href="{{route('crearRol')}}" class="btn btn-primary">Crear Rol</a>
        <a href="{{route('usuarios')}}" class="btn btn-primary">Usuarios</a>
    </div>

    @if($roles->isNotEmpty())
        <table class="table table-hover table-bordered text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre Rol</th>
                <th scope="col">privilegios</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $rol)
                <tr>
                    <th scope="row">{{$rol->id}}</th>
                    <td>{{$rol->nombre_rol}}</td>
                    <td>{{$rol->privilegios}}</td>
                    <td>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <li>No hay Roles</li>
    @endif

@endsection