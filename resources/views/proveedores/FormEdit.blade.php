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
                <li class="breadcrumb-item"><a href="/proveedores/index">proveedores</a></li>
                <li class="breadcrumb-item {{ Request::is('proveedores/form') ? 'active' : '' }}" aria-current="page">Editar Proveedores</li>
            </ol>
        </nav>
    </div>
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="display-6">Editar Proveedor</h4>
        </div>
    </div>
    <div class="card-body">
        <form action="/proveedores/actualizarProveedor/{{ $proveedores->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="row align-items-start">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="h6" for="proveedores">Nombre Proveedor</label>
                        <input type="text" class="form-control" placeholder="Nombre Proveedor" name="nombre" value="{{ old('nombre', $proveedores->nombre) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="precio">Dirección</label>
                        <input type="text" class="form-control" placeholder="Dirección" name="direccion" value="{{ old('direccion', $proveedores->direccion) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="stock">Teléfono</label>
                        <input type="number" class="form-control" placeholder="Teléfono" name="telefono" value="{{ old('telefono', $proveedores->telefono) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="stock">Email</label>
                        <input type="text" class="form-control" placeholder="Correo electronico" name="email" value="{{ old('email', $proveedores->email) }}" required>
                    </div>
                </div>
            </div>
            <div class="text-end mt-4">
                <a href="/proveedores/index" class="btn btn-primary ms-auto btn-m align-items-center bi bi-arrow-left">
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

@section('script-page')

<script>
    $(document).ready(function() {
        var data = <?= json_encode($proveedores) ?>
    });
</script>

@endsection
