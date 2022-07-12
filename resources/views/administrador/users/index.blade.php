@extends('adminlte::page')

@section('title', 'Usuarios')
@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
@include('sweetalert::alert')
@section('content_header')
<h3>Gestión de usuarios</h3>
<a href="{{route('administrador.users.create')}}" class="btn btn-primary">Crear usuario</a>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
           <table class="table table-stripe">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th colspan="2"></th>

                </tr>

           </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="{{route('administrador.users.edit', $user)}}" class="btn btn-primary">Editar</a></td>
                    <td>
                        <form action="{{route('administrador.users.destroy', $user)}}" method="POST">
                            @csrf
                            @method('delete')
                        <button class="btn btn-danger btn-md" type="submit">Eliminar</button>
                        </form>


                </tr>

                @endforeach

            </tbody>

           </table>
        </div>
    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
