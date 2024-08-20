@extends('layouts.app')
@section('title')
    Gestión de Propietarios - Ver Propietario
@endsection
@section('banner-inicio')
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h1>Ver Propietario</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="iq-header-img">
        <img src="{{ asset('../../assets/images/banner.png') }}" alt="header"
            class="img-fluid w-100 h-100 animated-scaleX">
    </div>
</div>
@endsection
@section('content')
<div class="container-fluid content-inner mt-n5 py-0 px-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                                <img src="../../assets/images/avatars/01.png" class="img-fluid rounded-pill avatar-100" alt="profile-image">
                            </div>
                            <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">{{ $data->name }}</h4>
                            </div>
                        </div>
                        <ul class="d-flex nav nav-pills mb-0 text-center profile-tab" data-toggle="slider-tab" id="profile-pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#profile-profile" role="tab"
                                aria-selected="false">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#cuentas-bancarias"
                                role="tab" aria-selected="false">Cuentas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile-activity"
                                role="tab" aria-selected="false">Archivos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="profile-content tab-content ">
                <div id="profile-profile" class="tab-pane fade active show">
                    <div class="card">
                        <div class="card-header">
                            <div class="header-title">
                            <h4 class="card-title">Perfil</h4>
                            </div>
                        </div>
                        <div class="card-body row ">
                            <div class="col-md-6 mt-2">
                                <h6 class="mb-1">Nombre Completo:</h6>
                                <p>{{ $data->name }}</p>
                            </div>
                            <div class="col-md-6 mt-2">
                                <h6 class="mb-1">Cédula:</h6>
                                <p>{{ $data->cedula }}</p>
                            </div>
                            <div class="col-md-6 mt-2">
                                <h6 class="mb-1">NIT:</h6>
                                <p>{{ $data->nit }}</p>
                            </div>
                            <div class="col-md-6 mt-2">
                                <h6 class="mb-1">Fecha de Nacimiento:</h6>
                                <p>{{ \Carbon\Carbon::parse($data->fecha_nacimiento)->format('d/m/Y') }}</p>
                            </div>
                            <div class="col-md-6 mt-2">
                                <h6 class="mb-1">Nombre de RUAT:</h6>
                                <p>{{ $data->name_ruat }}</p>
                            </div>
                            <div class="col-md-6 mt-2">
                                <h6 class="mb-1">Cédula de RUAT:</h6>
                                <p>{{ $data->ci_ruat }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="cuentas-bancarias" class="tab-pane fade">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Cuentas Bancarias</h4>
                            </div>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#addCuenta"
                                        class="btn btn-primary float-end">Registrar Cuenta</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="user-list-table" class="table table-striped" role="grid" data-toggle="data-table">
                                    <thead>
                                        <tr class="ligth">
                                            <th>Banco</th>
                                            <th>Número de Cuenta</th>
                                            <th width="10%" >Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->cuentas as $item)
                                        <tr>
                                            <td>{{ $item->banco }}</td>
                                            <td>{{ $item->cuenta }}</td>
                                            <td>
                                                <div class="flex align-items-center list-user-action">
                                                    <button class="btn btn-sm btn-icon btn-danger delete-record" data-toggle="tooltip" data-placement="top"
                                                        title="Eliminar" data-original-title="Delete"
                                                        data-id="{{ $item->id }}">
                                                        <span class="btn-inner">
                                                        <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                            <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        </svg>
                                                        </span>
                                                    </button>
                                                    <form id="formDelete-{{ $item->id }}" action="{{ route('propietario.deleteCuentaBancaria', ['id' => $data->id, 'cuenta' => $item->id ]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="modal fade" id="addCuenta" data-bs-backdrop="static"
                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="addCuenta" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <form action="{{ route('propietario.addCuentaBancaria', $data->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addCuenta">Agregar Cuenta Bancaria al propietario</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body row">
                                                <div class="col-md-12  mb-3">
                                                    <label for="url_file" class="form-label">Banco</label>
                                                    <select name="banco" id="" class="form-control">
                                                        <option value="">Seleccione banco</option>
                                                        <option value="Banco Nacional de Bolivia (BNB)">Banco Nacional de Bolivia (BNB)</option>
                                                        <option value="Banco Unión S.A.">Banco Unión S.A.</option>
                                                        <option value="Banco BISA">Banco BISA</option>
                                                        <option value="Banco de Crédito">Banco de Crédito</option>
                                                        <option value="Banco Económico de Bolivia">Banco Económico de Bolivia</option>
                                                        <option value="Banco Sol">Banco Sol</option>
                                                        <option value="Banco Central de Bolivia (BCB)">Banco Central de Bolivia (BCB)</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12  mb-3 ">
                                                    <label for="cuenta" class="form-label">Número de Cuenta</label>
                                                    <input class="form-control" type="text" name="cuenta" id="cuenta" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-gray" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="submit" class="btn btn-primary">Guardar Cuenta</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="profile-activity" class="tab-pane fade">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                            <h4 class="card-title">Archivos del Propietario</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-card grid-cols-3">
                                @foreach ($data->files as $item)
                                @if ($item->type == 'pdf')
                                <a
                                    href="{{ asset('storage/propietarios/'.$item->filename) }}" target="_blank">
                                    <img src="{{ asset('assets/images/files.png') }}"
                                    class="img-fluid bg-soft-info rounded" alt="profile-image">
                                    <br>
                                    <p class="text-center">{{ $item->name }}</p>
                                </a>
                                @else
                                <a data-fslightbox="gallery" href="{{ asset('storage/propietarios/'.$item->filename) }}">
                                    <img src="{{ asset('storage/propietarios/'.$item->filename) }}"
                                    class="img-fluid bg-soft-info rounded"
                                    alt="profile-image">
                                    <br>
                                    <p class="text-center">{{ $item->name }}</p>
                                </a>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.table tbody').on('click', '.delete-record', function(){
                let dataid = $(this).data('id');
                let formDelete = $('#formDelete-'+dataid);
                Swal.fire({
                    title: '¿Está Seguro de Eliminar el Registro?',
                    text: "Si tiene datos dependientes, no podrá eliminarlo!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Si, estoy seguro!'
                }).then((result) => {
                    if (result.value) {
                        $(formDelete).submit();
                    }
                });
            });
        });
    </script>
@endsection
