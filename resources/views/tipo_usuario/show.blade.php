@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles del Tipo de Usuario</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: {{ $tipousuario->id }}</h5>
                <p class="card-text"><strong>Nombre:</strong> {{ $tipousuario->usu_nombre }}</p>
                <p class="card-text"><strong>Correo Electrónico:</strong> {{ $tipousuario->usu_email }}</p>
                <p class="card-text"><strong>Género:</strong> {{ $tipousuario->usu_genero }}</p>
                <p class="card-text"><strong>Número de Celular:</strong> {{ $tipousuario->usu_celular }}</p>

                <a href="{{ route('tipousuario.index') }}" class="btn btn-primary">Volver</a>
            </div>
        </div>
    </div>
@endsection
