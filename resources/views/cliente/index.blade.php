@extends('layout.index')

@section('contenido')
@include('layout.nav')

<div class="accordion  mt-4 " id="accordionExample">

    <div class="accordion-item bg-white">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Filtros de busqueda
            </button>

        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            @if (session('delete'))
            <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
                {{ session('delete') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="accordion-body">
                <div class="text-end">
                    <div class="bd-example">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item {{ Request::is('cliente/index') ? 'active' : '' }}" aria-current="page">Clientes</li>
                                <li class="breadcrumb-item"><a href="/cliente/form">Agregar</a></li>
                            </ol>
                        </nav>
                    </div>

                    <a href="/cliente/form" class="btn btn-primary ms-auto btn-sm align-items-center">
                        <svg class="icon-22 me-2" width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7366 2.76175H8.08455C6.00455 2.75375 4.29955 4.41075 4.25055 6.49075V17.3397C4.21555 19.3897 5.84855 21.0807 7.89955 21.1167C7.96055 21.1167 8.02255 21.1167 8.08455 21.1147H16.0726C18.1416 21.0937 19.8056 19.4087 19.8026 17.3397V8.03975L14.7366 2.76175Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M14.4741 2.75V5.659C14.4741 7.079 15.6231 8.23 17.0431 8.234H19.7971" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M14.2936 12.9141H9.39355" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M11.8442 15.3639V10.4639" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        Agregar
                    </a>

                </div>

                <form action="index" method="get" id="filter-form">
                    <div class="row mb-3">
                        <div class="col">
                            <label>ID</label>
                            <input type="text" class="form-control" name="id" placeholder="ID">
                        </div>
                        <div class="col">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                        </div>
                    </div>
                    <div class="text-end mb-3">
                        <button type="submit" class="btn btn-primary ms-auto btn-sm d-flex align-items-center" id="filter-button">
                            <svg class="icon-22 me-2" width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.33 16.5928H4.0293" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M13.1406 6.90042H19.4413" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.72629 6.84625C8.72629 5.5506 7.66813 4.5 6.36314 4.5C5.05816 4.5 4 5.5506 4 6.84625C4 8.14191 5.05816 9.19251 6.36314 9.19251C7.66813 9.19251 8.72629 8.14191 8.72629 6.84625Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20.0002 16.5538C20.0002 15.2581 18.9429 14.2075 17.6379 14.2075C16.3321 14.2075 15.2739 15.2581 15.2739 16.5538C15.2739 17.8494 16.3321 18.9 17.6379 18.9C18.9429 18.9 20.0002 17.8494 20.0002 16.5538Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            Filtrar
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div class="mt-4">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Clientes</h4>
                    </div>
                    <!-- <button type="button" class="btn btn-outline-info"> <svg class="icon-26 me-2" width="26" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.666 21.25H16.335C19.355 21.25 21.25 19.111 21.25 16.084V7.916C21.25 4.889 19.365 2.75 16.335 2.75H7.666C4.636 2.75 2.75 4.889 2.75 7.916V16.084C2.75 19.111 4.636 21.25 7.666 21.25Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M12 16.0861V7.91406" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M15.748 12.3223L12 16.0863L8.25195 12.3223" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg> Exportar</button> -->
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive mt-4">
                        <table id="basic-table" class="table table-striped mb-0" role="grid">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                                @endif
                                @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->nombre}}</td>
                                    <td>{{$cliente->direccion}}</td>
                                    <td>{{$cliente->telefono}}</td>
                                    <td>{{$cliente->email}}</td>
                                    <td>
                                    
                                        <a class="bi bi-pencil-fill" href="actualizarCliente/{{$cliente->id}}/edit" title="Editar" style="font-size: 1.5rem;"></a>

                                        <!-- Botón para abrir el modal de confirmación -->
                                        <a class="bi bi-trash3-fill text-danger" href="" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $cliente->id }}" style="font-size: 1.5rem;" title="Eliminar"></a>

                                        <!-- Modal de Confirmación para cada cliente -->
                                        <div class="modal fade" id="confirmDeleteModal{{ $cliente->id }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel{{ $cliente->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="confirmDeleteModalLabel{{ $cliente->id }}">Confirmar Eliminación</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        ¿Estás seguro de que deseas eliminar este cliente?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form method="post" action="eliminarCliente/{{$cliente->id}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Fin Modal -->
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script-page')

<script>
    $(document).ready(function() {
        $('#filter-button').click(function() {
            // Evitamos que la página se recargue
            event.preventDefault();

            // Obtenemos los dato del formulario
            var formData = $('#filter-form').serialize();

            $.ajax({
                url: "index",
                method: 'GET',
                data: formData,
                success: function(response) {
                    // Reemplazar la tabla con los nuevos datos
                    $('tbody').html($(response).find('tbody').html());
                },
                error: function(xhr, status, error) {
                    console.error("Ocurrió un error: " + error);
                }
            });
        });
    });
</script>

@endsection