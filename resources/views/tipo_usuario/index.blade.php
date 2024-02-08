@extends('layouts.app') 

@section('content')
    <div class="container">
        <h2>Lista de Tipos de Usuario</h2>

        <a href="{{ route('tipousuario.create') }}" class="btn btn-primary">Crear Nuevo Tipo de Usuario</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Celular</th>
                    <th>Acciones</th>
                   
                </tr>
            </thead>
            <tbody>
            
             @forelse ($tiposUsuarios as $tipoUsuario) 
    <tr>
        <td>{{ $tipoUsuario->id_usuario }}</td>
        <td>{{ $tipoUsuario->usu_nombre }}</td>
        <td>{{ $tipoUsuario->usu_email }}</td>
        <td>{{ $tipoUsuario->usu_celular }}</td>
        <td>
            <a href="{{ route('tipousuario.show', $tipoUsuario) }}" class="btn btn-info btn-sm">Ver</a>
            <a href="{{ route('tipousuario.edit', $tipoUsuario) }}" class="btn btn-warning btn-sm">Editar</a>
            <form action="{{ route('tipousuario.destroy', $tipoUsuario) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="4">No hay tipos de usuario disponibles.</td>
    </tr>
@endforelse

            </tbody>
        </table>
    </div>
@endsection

{{-- --}}