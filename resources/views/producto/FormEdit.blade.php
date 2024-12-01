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
                <li class="breadcrumb-item"><a href="/pagina/index">Productos</a></li>
                <li class="breadcrumb-item {{ Request::is('pagina/form') ? 'active' : '' }}" aria-current="page">Editar producto</li>
            </ol>
        </nav>
    </div>
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="display-6">Editar Producto</h4>
        </div>
    </div>
    <div class="card-body">
        <form action="/pagina/actualizarProducto/{{ $producto->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="row align-items-start">
                <div class="col-md-6">
                    <img src="{{ asset('productosIMG/' . $producto->imagen) }}" alt="Imagen del producto" class="img-fluid img-thumbnail mb-2" style="object-fit: cover; width: 100%; height: 100%;">

                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="h6" for="customFile">Seleccionar nueva imagen</label>
                        <input type="file" class="form-control" id="customFile" name="imagen" value="{{ old('imagen', $producto->imagen) }}">
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="producto">Producto</label>
                        <input type="text" class="form-control" placeholder="Producto" name="nombre" value="{{ old('nombre', $producto->nombre) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="precio">Precio</label>
                        <input type="text" class="form-control" placeholder="Precio" name="precio" value="{{ old('precio', $producto->precio) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="stock">Stock</label>
                        <input type="number" class="form-control" placeholder="Stock" name="stock" value="{{ old('stock', $producto->stock) }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="descripcion">Descripción</label>
                        <textarea class="form-control" aria-label="With textarea" name="descripcion" required>{{ old('descripcion', $producto->descripcion) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="h6" for="proveedor">Proveedor</label>
                        <select class="form-select form-select mb-3" aria-label=".form-select-lg example" name="proveedor" id="SelectProveedor" required>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="h6" for="fecha">Fecha</label>
                        <input type="date" class="form-control date_flatpicker" placeholder="Date Picker" name="fecha" value="{{ old('fecha', $producto->fecha) }}" required>
                    </div>
                </div>
            </div>
            <div class="text-end mt-4">
                <a href="/pagina/index" class="btn btn-primary ms-auto btn-m align-items-center bi bi-arrow-left">
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

        const response = data.map((item) => ({
            id: item.id,
            text: item.nombre,
            selected: true
        }))

        $("#SelectProveedor").select2({
            data: response,
            placeholder: "Seleccione una opción",
            allowClear: true,

        })
    });
</script>

@endsection
