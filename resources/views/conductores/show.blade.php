@extends('layouts.app')
@section('title')
    Gestión de Conductores - Ver Conductor
@endsection
@section('banner-inicio')
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h1>Ver Conductor</h1>
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
                                <h6 class="mb-1">Licencia:</h6>
                                <p>{{ $data->licencia }}</p>
                            </div>
                            <div class="col-md-6 mt-2">
                                <h6 class="mb-1">Fecha de Ingreso:</h6>
                                <p>{{ \Carbon\Carbon::parse($data->fecha_ingreso)->format('d/m/Y') }}</p>
                            </div>
                            <div class="col-md-6 mt-2">
                                <h6 class="mb-1">Fecha de Salida:</h6>
                                <p>{{ \Carbon\Carbon::parse($data->fecha_salida)->format('d/m/Y') }}</p>
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
                                    href="{{ asset('storage/conductores/'.$item->filename) }}" target="_blank">
                                    <img src="{{ asset('assets/images/files.png') }}"
                                    class="img-fluid bg-soft-info rounded" alt="profile-image">
                                    <br>
                                    <p class="text-center">{{ $item->name }}</p>
                                </a>
                                @else
                                <a data-fslightbox="gallery" href="{{ asset('storage/conductores/'.$item->filename) }}">
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
