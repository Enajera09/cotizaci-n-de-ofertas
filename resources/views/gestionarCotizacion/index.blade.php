@extends('layout.index')

@section('contenido')
@include('layout.nav')

<div class="container">
    <div class="row-fluid">
        <div class="col-md-12">
            <h2><span class="glyphicon glyphicon-edit"></span> Gestionar Cotización</h2>
            <hr>
            <form class="form-horizontal" role="form" id="datos_cotizacion">
                <div class="form-group row">
                    <label for="atencion" class="col-md-1 control-label">Cliente:</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="cliente" placeholder="{{$cotizacion->clientes->nombre}}" disabled>
                    </div>
                    <label for="tel1" class="col-md-1 control-label">Usuario:</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="usuario" placeholder="{{$cotizacion->usuarios->nombre}}" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="empresa" class="col-md-1 control-label">Forma de pago</label>
                    <div class="col-md-3">
                        <input type="text" class="form-control" id="FormaPago" placeholder="{{$cotizacion->forma_pago}}" disabled>
                    </div>
                    <label for="tel2" class="col-md-1 control-label">Fecha de vencimiento</label>
                    <div class="col-md-2">
                        <input type="text" class="form-control" id="FechaVencimiento" placeholder="{{$cotizacion->fecha_vencimiento}}" disabled>
                    </div>
                
                </div>


                <div class="col-md-12">
                    <div class="pull-right">
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal">
                            <i class="bi bi-plus-circle"></i> Agregar productos
                        </button>
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-print"></span> Imprimir
                        </button>
                    </div>
                </div>
            </form>
            <br><br>
            <div id="resultados" class='col-md-12'></div><!-- Carga los datos ajax -->

            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla-productos">
                    <!-- Aquí se agregarán los productos dinámicamente -->
                </tbody>
            </table>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Buscar productos</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Tabla de productos ficticios -->
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="q" placeholder="Buscar productos" onkeyup="load(1)">
                                    </div>
                                    <button type="button" class="btn btn-default" onclick="load(1)">
                                        <i class="bi bi-search"></i> Buscar
                                    </button>
                                </div>
                            </form>

                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Agregar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Producto X</td>
                                        <td><input type="number" class="form-control" id="precio_venta_" value="75.00"></td>
                                        <td><input type="number" class="form-control" id="cantidad_" value="1"></td>
                                        <td>
                                            <button type="button" class="btn btn-success" onclick="agregar(1)">
                                                <i class="bi bi-plus-circle"></i> Agregar
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Producto Y</td>
                                        <td><input type="number" class="form-control" id="precio_venta_" value="125.00"></td>
                                        <td><input type="number" class="form-control" id="cantidad_" value="2"></td>
                                        <td>
                                            <button type="button" class="btn btn-success" onclick="agregar(2)">
                                                <i class="bi bi-plus-circle"></i> Agregar
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Producto Z</td>
                                        <td><input type="number" class="form-control" id="precio_venta_" value="200.00"></td>
                                        <td><input type="number" class="form-control" id="cantidad_" value="3"></td>
                                        <td>
                                            <button type="button" class="btn btn-success" onclick="agregar(3)">
                                                <i class="bi bi-plus-circle"></i> Agregar
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
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
        load(1);
    });

    function load(page) {
        var q = $("#q").val();
        $("#loader").fadeIn('slow');
        $.ajax({
            url: './ajax/productos_cotizacion.php?action=ajax&page=' + page + '&q=' + q,
            beforeSend: function(objeto) {
                $('#loader').html('<img src="./img/ajax-loader.gif"> Cargando...');
            },
            success: function(data) {
                $(".outer_div").html(data).fadeIn('slow');
                $('#loader').html('');

            }
        })
    }
</script>
<script>
    function agregar(id) {
        var precioVenta = document.getElementById('precio_venta_').value;
        var cantidad = document.getElementById('cantidad_').value;
        var producto = "Producto " + id; // Puedes obtener el nombre del producto desde tu base de datos o una variable.

        // Validaciones
        if (isNaN(cantidad) || cantidad <= 0) {
            alert('Por favor, introduce una cantidad válida.');
            return;
        }
        if (isNaN(precioVenta) || precioVenta <= 0) {
            alert('Por favor, introduce un precio válido.');
            return;
        }

        // Calcular subtotal
        var subtotal = (precioVenta * cantidad).toFixed(2);

        // Construir nueva fila
        var nuevaFila = `
        <tr id="fila-${id}">
            <td>${producto}</td>
            <td>${precioVenta}</td>
            <td>${cantidad}</td>
            <td>${subtotal}</td>
            <td>
                <button class="btn btn-danger btn-sm" onclick="eliminarFila(${id})">
                    <i class="bi bi-trash"></i> Eliminar
                </button>
            </td>
        </tr>
    `;

        // Agregar fila a la tabla
        $("#tabla-productos").append(nuevaFila);


    }

    function eliminarFila(id) {
        // Eliminar la fila por ID
        $(`#fila-${id}`).remove();
    }


    $("#datos_cotizacion").submit(function() {
        var atencion = $("#atencion").val();
        var tel1 = $("#tel1").val();
        var empresa = $("#empresa").val();
        var tel2 = $("#tel2").val();
        var email = $("#email").val();
        var condiciones = $("#condiciones").val();
        var validez = $("#validez").val();
        var entrega = $("#entrega").val();
        VentanaCentrada('./pdf/documentos/cotizacion_pdf.php?atencion=' + atencion + '&tel1=' + tel1 + '&empresa=' + empresa + '&tel2=' + tel2 + '&email=' + email + '&condiciones=' + condiciones + '&validez=' + validez + '&entrega=' + entrega, 'Cotizacion', '', '1024', '768', 'true');
    });
</script>


@endsection