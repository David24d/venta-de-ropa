@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Nuevo Tipo de Usuario</h2>

        <form method="post" action="{{ route('tipousuario.store') }}">
            @csrf

            <div class="mb-3">
                <label for="usu_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="usu_nombre" name="usu_nombre" required>
            </div>

            <div class="mb-3">
                <label for="usu_email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="usu_email" name="usu_email" required>
            </div>

            <div class="mb-3">
                <label for="usu_password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="usu_password" name="usu_password" required>
            </div>

            <div class="mb-3">
                <label for="usu_genero" class="form-label">Género</label>
                <select class="form-select" id="usu_genero" name="usu_genero" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="usu_celular" class="form-label">Número de Celular</label>
                <input type="text" class="form-control" id="usu_celular" name="usu_celular" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
