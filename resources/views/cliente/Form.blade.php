@extends('layout.index')

@section('contenido')
@include('layout.nav')

<div class="card mt-4">
@if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <div class="bd-example ms-2">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/cliente/index">Clientes</a></li>
                <li class="breadcrumb-item {{ Request::is('cliente/form') ? 'active' : '' }}" aria-current="page">Agregar</li>
            </ol>
        </nav>
    </div>
    <div class="card-header d-flex justify-content-between">
        <div class="header-title">
            <h4 class="display-6">Agregar Cliente</h4>
        </div>
    </div>
    <div class="card-body">

        <form action="crearCliente" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label class="h6" for="cliente">Cliente</label>
                    <input type="text" class="form-control" placeholder="Cliente" name="nombre" required>
                </div>
                <div class="col-md-4">
                    <label class="h6" for="direccion">Dirección</label>
                    <input type="text" class="form-control" placeholder="Dirección" name="direccion" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-4">
                    <label class="h6" for="telefono">Teléfono</label>
                    <input type="number" class="form-control" placeholder="Teléfono" name="telefono" required>
                </div>

                <div class="col-md-8 mt-4">
                    <label class="h6" for="email">Email</label>
                    <textarea class="form-control" aria-label="With textarea" name="email" required></textarea>
                </div>
            </div>
            <div class="text-end mt-4">
                <a href="/cliente/index" class="btn btn-primary ms-auto btn-sm align-items-center">
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

