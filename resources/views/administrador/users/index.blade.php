@extends('adminlte::page')

@section('title', 'Usuarios')
@section('content_header')
<h3>Gestión de usuarios</h3>
<a href="{{route('administrador.users.create')}}" class="btn btn-primary">Crear usuario</a>
@stop

@section('content')
@include('sweetalert::alert')
    <div class="card">
        <div class="card-body">
           <table class="table table-striped" id="users">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th> </th>
                    <th> </th>

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

@push('js')
<script>
    $(document).ready(function () {
        $('#users').DataTable({
            responsive:true,
            autoWidth:false,
            "language":{
                "lengthMenu":"Mostrar "+
            `<select class="custom-select custom-select-sm form-control form-control-sm">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="-1">Todos</option>
                </select>`
                +" registros por página",
                "zeroRecords":"Nada encontrado",
                "info":"Mostrando la página _PAGE_ de _PAGES_",
                "search":"Buscar:",
                "paginate":{
                    'next':'Siguiente',
                    'previous':'Anterior'
                }
            }
        });
    });
</script>
@endpush
