@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Tipo de Usuario</h2>

        <form method="POST" action="{{ route('tipousuario.update', $tipousuario) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="usu_nombre">Nombre:</label>
                <input type="text" name="usu_nombre" value="{{ old('usu_nombre', $tipousuario->usu_nombre) }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="usu_email">Correo Electrónico:</label>
                <input type="email" name="usu_email" value="{{ old('usu_email', $tipousuario->usu_email) }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="usu_genero">Género:</label>
                <select name="usu_genero" class="form-control">
                    <option value="Masculino" {{ old('usu_genero', $tipousuario->usu_genero) == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                    <option value="Femenino" {{ old('usu_genero', $tipousuario->usu_genero) == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>

            <div class="form-group">
                <label for="usu_celular">Número de Celular:</label>
                <input type="text" name="usu_celular" value="{{ old('usu_celular', $tipousuario->usu_celular) }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
@endsection
