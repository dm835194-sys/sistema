@extends('layouts.app')
@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-dark text-white">
        <h2 class="h5 mb-0">Detalles del Usuario</h2>
    </div>
    <div class="card-body">
        <p><strong>ID:</strong> {{ $usuario->id }}</p>
        <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
        <p><strong>Email:</strong> {{ $usuario->email }}</p>
        <p><strong>Fecha de Creación:</strong> {{ $usuario->created_at }}</p>
    </div>
    <div class="card-footer">
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary">Volver a la lista</a>
    </div>
</div>

@endsection