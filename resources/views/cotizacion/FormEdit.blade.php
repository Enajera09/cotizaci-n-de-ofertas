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
                <li class="breadcrumb-item"><a href="/cotizaciones/index">Cotizaciones</a></li>
                <li class="breadcrumb-item {{ Request::is('cotizaciones/form') ? 'active' : '' }}" aria-current="page">Editar cotización</li>
            </ol>
        </nav>
    </div>
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="display-6">Editar Cotización</h4>
        </div>
    </div>
    <div class="card-body">
        <form action="/cotizaciones/actualizarCotizacion/{{ $cotizaciones->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="row align-items-start">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="h6" for="cliente_id">Cliente</label>
                        <select class="form-control" name="cliente_id" required>
        <option value="" disabled selected>Seleccione un cliente</option>
        @foreach ($clientes as $cliente)
            <option value="{{ $cliente->id }}" {{ old('cliente_id', $cotizaciones->cliente_id) == $cliente->id ? 'selected' : '' }}>
                {{ $cliente->nombre }}
            </option>
        @endforeach
    </select>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="usuario_id">Usuario</label>
                        <select class="form-control" name="usuario_id" required>
        <option value="" disabled selected>Seleccione un usuario</option>
        @foreach ($usuarios as $usuario)
            <option value="{{ $usuario->id }}" {{ old('usuario_id', $cotizaciones->usuario_id) == $usuario->id ? 'selected' : '' }}>
                {{ $usuario->nombre }}
            </option>
        @endforeach
    </select>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="forma_pago">Forma de Pago</label>
                        <input type="text" class="form-control" placeholder="forma_pago" name="forma_pago" value="{{ old('forma_pago', $cotizaciones->forma_pago) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="fecha_expedicion">Fecha Expedición</label>
                        <input type="date" class="form-control" placeholder="Fecha Expedición" name="fecha_expedicion" value="{{ old('fecha_expedicion', $cotizaciones->fecha_expedicion) }}"required>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="fecha_vencimiento">Fecha Vencimiento</label>
                        <input type="date" class="form-control" placeholder="Fecha Vencimiento" name="fecha_vencimiento" value="{{ old('fecha_vencimiento', $cotizaciones->fecha_vencimiento) }}"required>
                    </div>
                </div>
            </div>
            <div class="text-end mt-4">
                <a href="/cotizaciones/index" class="btn btn-primary ms-auto btn-m align-items-center bi bi-arrow-left">
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
