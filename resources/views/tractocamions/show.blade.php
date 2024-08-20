@extends('layouts.app')
@section('title')
    Gestión de Tracto Camiones - Ver Tracto Camión
@endsection
@section('banner-inicio')
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h1>Ver Tracto Camión</h1>
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
                            <!-- <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                                <h4 class="me-2 h4">Tracto Camion #0000{{ $data->id }}</h4>
                            </div> -->
                        </div>
                        <ul class="d-flex nav nav-pills mb-0 text-center profile-tab" data-toggle="slider-tab" id="profile-pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#profile-profile" role="tab"
                                aria-selected="false">TractoCamión</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile-semiremolque"
                                role="tab" aria-selected="false">Semi Remolque</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#profile-activity"
                                role="tab" aria-selected="false">Archivos TractoCamión</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#files-semiremolque"
                                role="tab" aria-selected="false">Archivos Semi Remolque</a>
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
                                <h4 class="card-title">Perfil de Tracto Camión</h4>
                            </div>
                        </div>
                        <div class="card-body row ">
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Placa:</h6>
                                <p>{{ $data->placa }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Número de Chasis:</h6>
                                <p>{{ $data->chasis }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Número de Motor:</h6>
                                <p>{{ $data->motor }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Año:</h6>
                                <p>{{ $data->anio }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Tipo de Vehículo:</h6>
                                <p>{{ $data->tipo_vehiculo }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Color:</h6>
                                <p>{{ $data->color }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Número de Ejes:</h6>
                                <p>{{ $data->ejes }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Marca:</h6>
                                <p>{{ $data->marca }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Asientos:</h6>
                                <p>{{ $data->asientos }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Capacidad de Arrastre:</h6>
                                <p>{{ $data->capacidad_arrastre }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Modelo:</h6>
                                <p>{{ $data->modelo }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Cilindraje:</h6>
                                <p>{{ $data->cilindraje }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Tracción:</h6>
                                <p>{{ $data->traccion }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Fecha Inicio de Seguro CTI:</h6>
                                <p>{{ $data->fechai_seguro_cti }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Fecha Vencimiento de Seguro CTI:</h6>
                                <p>{{ $data->fechaf_seguro_cti }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="profile-semiremolque" class="tab-pane fade">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                            <h4 class="card-title">Perfil de Semi Remolque</h4>
                            </div>
                        </div>
                        <div class="card-body row ">
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Placa:</h6>
                                <p>{{ $data->semiRemolque->placa }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Número de Chasis:</h6>
                                <p>{{ $data->semiRemolque->chasis }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Año:</h6>
                                <p>{{ $data->semiRemolque->anio }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Color:</h6>
                                <p>{{ $data->semiRemolque->color }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Marca:</h6>
                                <p>{{ $data->semiRemolque->marca }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Tipo de Carrocería:</h6>
                                <p>{{ $data->semiRemolque->tipo_carroceria }}</p>
                            </div>

                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Número de Ejes:</h6>
                                <p>{{ $data->semiRemolque->ejes }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Capacidad total:</h6>
                                <p>{{ $data->semiRemolque->capacidad_total }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Capacidad 1er compartimiento:</h6>
                                <p>{{ $data->semiRemolque->capacidad_compartimiento1 }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Capacidad 2do compartimiento:</h6>
                                <p>{{ $data->semiRemolque->capacidad_compartimiento2 }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Fecha Inicio de Seguro CTI:</h6>
                                <p>{{ $data->semiRemolque->fechai_tarjeta_operacion }}</p>
                            </div>
                            <div class="col-md-4 mt-2">
                                <h6 class="mb-1">Fecha Vencimiento de Seguro CTI:</h6>
                                <p>{{ $data->semiRemolque->fechaf_tarjeta_operacion }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="profile-activity" class="tab-pane fade">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                            <h4 class="card-title">Archivos del Tracto Camión</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-card grid-cols-3">
                                @foreach ($data->files as $item)
                                @if ($item->type == 'pdf')
                                <a
                                    href="{{ asset('storage/tractocamiones/'.$item->filename) }}" target="_blank">
                                    <img src="{{ asset('assets/images/files.png') }}"
                                    class="img-fluid bg-soft-info rounded" alt="profile-image">
                                    <br>
                                    <p class="text-center">{{ $item->name }}</p>
                                </a>
                                @else
                                <a data-fslightbox="gallery" href="{{ asset('storage/tractocamiones/'.$item->filename) }}">
                                    <img src="{{ asset('storage/tractocamiones/'.$item->filename) }}"
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
                <div id="files-semiremolque" class="tab-pane fade">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                            <h4 class="card-title">Archivos del Semi Remolque</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-card grid-cols-3">
                                @foreach ($data->semiRemolque->files as $item)
                                @if ($item->type == 'pdf')
                                <a
                                    href="{{ asset('storage/semiremolques/'.$item->filename) }}" target="_blank">
                                    <img src="{{ asset('assets/images/files.png') }}"
                                    class="img-fluid bg-soft-info rounded" alt="profile-image">
                                    <br>
                                    <p class="text-center">{{ $item->name }}</p>
                                </a>
                                @else
                                <a data-fslightbox="gallery" href="{{ asset('storage/semiremolques/'.$item->filename) }}">
                                    <img src="{{ asset('storage/semiremolques/'.$item->filename) }}"
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
