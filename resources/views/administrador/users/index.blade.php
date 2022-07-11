@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
<h3>Gestión de usuarios</h3>
<a href="{{route('administrador.users.create')}}" class="btn btn-secondary btn-sm float-right">Crear usuario</a>
@stop

@section('content')
    <p></p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
