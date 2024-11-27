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
                <li class="breadcrumb-item {{ Request::is('cotizaciones/form') ? 'active' : '' }}" aria-current="page">Agregar</li>
            </ol>
        </nav>
    </div>
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="display-6">Agregar cotización</h4>
        </div>
    </div>
    <div class="card-body">
        <form action="crearCotizacion" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
    <!-- Cliente -->
    <div class="col-md-4">
    <label class="h6" for="cliente_id">Cliente</label>
    <select class="form-select mb-3" aria-label="Seleccione un cliente" name="cliente_id" id="SelectClientes" required>
        <option value="" disabled selected>Seleccione un cliente</option>
        @foreach($clientes as $cliente)
            <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
        @endforeach
    </select>
</div>


             <!-- Usuario -->
             <div class="col-md-4">
    <label class="h6" for="usuario_id">Usuario</label>
    <select class="form-select mb-3" aria-label="Seleccione un Usuario" name="usuario_id" id="SelectUsuarios" required>
        <option value="" disabled selected>Seleccione un usuario</option>
        @foreach($usuarios as $usuario)
            <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
        @endforeach
    </select>
</div>
        </div>

        <div class="row">    
        <div class="col-md-8">
        <label class="h6" for="forma_pago">Forma de Pago</label>
        <input type="text" class="form-control" name="forma_pago" id="forma_pago" required>
    </div>
                <div class="col-md-8 mt-4">
                    <label class="h6" for="fecha_expedicion">Fecha Expedición</label>
                    <input type="date" class="form-control" placeholder="Fecha Expedición" name="fecha_expedicion" required></textarea>
                </div>
                <div class="col-md-8 mt-4">
                    <label class="h6" for="fecha_vencimiento">Fecha Vencimiento</label>
                    <input type="date" class="form-control" placeholder="Fecha Vencimiento" name="fecha_vencimiento" required></textarea>
                </div>
            </div>
            <div class="text-end mt-4">
                <a href="/cotizaciones/index" class="btn btn-primary ms-auto btn-sm align-items-center">
                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.25 12.2744L19.25 12.2744" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.2998 18.2988L4.2498 12.2748L10.2998 6.24976" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    Regresar
                </a>
                <button type="submit" class="btn btn-success"> <svg class="icon-25" width="25" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg> Guardar</button>
            </div>
        </form>
    </div>
</div>
@endsection


