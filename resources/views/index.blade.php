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
            <div class="accordion-body">
                <div class="text-end mb-3">

                    <button type="submit" class="btn btn-primary ms-auto">Agregar</button>
                </div>
                <form>
                    <div class="row mb-3">
                        <div class="col">
                            <label>Campo 1</label>
                            <input type="text" class="form-control" placeholder="Campo 1">
                        </div>
                        <div class="col">
                            <label>Campo 2</label>
                            <input type="text" class="form-control" placeholder="Campo 2">
                        </div>
                    </div>
                    <div class="text-end mb-3">
                        <button type="submit" class="btn btn-primary">Filtrar</button>
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
                        <h4 class="card-title">Productos</h4>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive mt-4">
                        <table id="basic-table" class="table table-striped mb-0" role="grid">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Imagen</th>
                                    <th>nombre</th>
                                    <th>Status</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <h6>Soft UI XD Version</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="iq-media-group iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                            </a>
                                        </div>
                                    </td>
                                    <td>$14000</td>
                                    <td>
                                        <div class="text-info">Pending</div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center mb-2">
                                            <h6>60%</h6>
                                        </div>
                                        <div class="progress bg-soft-info shadow-none w-100" style="height: 6px">
                                            <div class="progress-bar bg-info" data-toggle="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <h6>Add Progress Track</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="iq-media-group iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                            </a>
                                        </div>
                                    </td>
                                    <td>$3000</td>
                                    <td>
                                        <div class="text-danger">Pending</div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center mb-2">
                                            <h6>10%</h6>
                                        </div>
                                        <div class="progress bg-soft-danger shadow-none w-100" style="height: 6px">
                                            <div class="progress-bar bg-danger" data-toggle="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <h6>Fix Platform Errors</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="iq-media-group iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                            </a>
                                        </div>
                                    </td>
                                    <td>Not set</td>
                                    <td>
                                        <div class="text-success">Completed</div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center mb-2">
                                            <h6>100%</h6>
                                        </div>
                                        <div class="progress bg-soft-success shadow-none w-100" style="height: 6px">
                                            <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <h6>Launch Our Mobile App</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="iq-media-group iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">AP</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">DP</div>
                                            </a>
                                        </div>
                                    </td>
                                    <td>$20500</td>
                                    <td>
                                        <div class="text-success">Completed</div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center mb-2">
                                            <h6>100%</h6>
                                        </div>
                                        <div class="progress bg-soft-success shadow-none w-100" style="height: 6px">
                                            <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <h6>Add the New Pricing Page</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="iq-media-group iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                            </a>
                                        </div>
                                    </td>
                                    <td>$500</td>
                                    <td>
                                        <div class="text-primary">On Schedule</div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center mb-2">
                                            <h6>25%</h6>
                                        </div>
                                        <div class="progress bg-soft-primary shadow-none w-100" style="height: 6px">
                                            <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">

                                            <h6>Redesign New Online Shop</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="iq-media-group iq-media-group-1">
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                            </a>
                                            <a href="#" class="iq-media-1">
                                                <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                            </a>
                                        </div>
                                    </td>
                                    <td>$2000</td>
                                    <td>
                                        <div class="text-warning">Completed</div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center mb-2">
                                            <h6>40%</h6>
                                        </div>
                                        <div class="progress bg-soft-warning shadow-none w-100" style="height: 6px">
                                            <div class="progress-bar bg-warning" data-toggle="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection