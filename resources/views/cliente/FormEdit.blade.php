@extends('layout.index')

@section('contenido')
@include('layout.nav')

<div class="card mt-4">
    @if (session('mensaje'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{ session('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="bd-example ms-2">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/cliente/index">Clientes</a></li>
                <li class="breadcrumb-item {{ Request::is('cliente/form') ? 'active' : '' }}" aria-current="page">Editar cliente</li>
            </ol>
        </nav>
    </div>
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="display-6">Editar Cliente</h4>
        </div>
    </div>
    <div class="card-body">
        <form action="/cliente/actualizarCliente/{{ $cliente->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="row align-items-start">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="h6" for="cliente">Cliente</label>
                        <input type="text" class="form-control" placeholder="Cliente" name="nombre" value="{{ old('nombre', $cliente->nombre) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="direccion">Dirección</label>
                        <input type="text" class="form-control" placeholder="Dirección" name="direccion" value="{{ old('direccion', $cliente->direccion) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="telefono">Teléfono</label>
                        <input type="number" class="form-control" placeholder="Teléfono" name="telefono" value="{{ old('telefono', $cliente->telefono) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email', $cliente->email) }}" required>
                    </div>
                </div>
            </div>
            <div class="text-end mt-4">
                <a href="/cliente/index" class="btn btn-primary ms-auto btn-m align-items-center bi bi-arrow-left">
                    Regresar
                </a>
                <button class="bi bi-arrow-counterclockwise btn btn-success btn-m" type="submit">
                    Actualizar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
