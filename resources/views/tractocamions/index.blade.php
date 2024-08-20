@extends('layouts.app')
@section('title')
Gestión de Tracto Caminones
@endsection
@section('banner-inicio')
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h1>Gestión de Tracto Caminones</h1>
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
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body px-0">
                <div class="d-flex justify-content-end p-3">
                    <a href="{{ route('tracto-camiones.create') }}" class="btn btn-primary mb-3">
                        <svg class="icon-32" width="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0001 8.32739V15.6537" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M15.6668 11.9904H8.3335" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                        Nuevo Tracto Camion
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="user-list-table" class="table table-striped" role="grid" data-toggle="data-table">
                        <thead>
                            <tr class="ligth">
                                <th>Placa</th>
                                <th>Chasis</th>
                                <th>Motor</th>
                                <th>Modelo</th>
                                <th>Color</th>
                                <th width="10%">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                                <tr>
                                    <td>{{ $item->placa }}</td>
                                    <td>{{ $item->chasis }}</td>
                                    <td>{{ $item->motor }}</td>
                                    <td>{{ $item->modelo }}</td>
                                    <td>{{ $item->color }}</td>

                                    <td>
                                        <div class="flex align-items-center list-user-action">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-secondary" data-toggle="tooltip"
                                                data-placement="top" title="Agregar Archivo" data-original-title="Ver"
                                                data-bs-toggle="modal" data-bs-target="#uploadFile-{{ $item->id }}">
                                                <span class="btn-inner">
                                                    <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9455 12.89C14.2327 13.18 14.698 13.18 14.9851 12.89C15.2822 12.6 15.2822 12.13 14.995 11.84L12.1535 8.96C12.0842 8.89 12.005 8.84 11.9158 8.8C11.8267 8.76 11.7376 8.74 11.6386 8.74C11.5396 8.74 11.4406 8.76 11.3515 8.8C11.2624 8.84 11.1832 8.89 11.1139 8.96L8.28218 11.84C7.99505 12.13 7.99505 12.6 8.28218 12.89C8.56931 13.18 9.03465 13.18 9.32178 12.89L10.896 11.29V16.12C10.896 16.53 11.2228 16.86 11.6386 16.86C12.0446 16.86 12.3713 16.53 12.3713 16.12V11.29L13.9455 12.89ZM19.3282 9.02561C19.5609 9.02292 19.8143 9.02 20.0446 9.02C20.2921 9.02 20.5 9.22 20.5 9.47V17.51C20.5 19.99 18.5 22 16.0446 22H8.17327C5.58911 22 3.5 19.89 3.5 17.29V6.51C3.5 4.03 5.4901 2 7.96535 2H13.2525C13.5 2 13.7079 2.21 13.7079 2.46V5.68C13.7079 7.51 15.1931 9.01 17.0149 9.02C17.4313 9.02 17.801 9.02315 18.1258 9.02591C18.3801 9.02807 18.6069 9.03 18.8069 9.03C18.9479 9.03 19.1306 9.02789 19.3282 9.02561ZM19.6047 7.566C18.7908 7.569 17.8324 7.566 17.1423 7.559C16.0472 7.559 15.1452 6.648 15.1452 5.542V2.906C15.1452 2.475 15.6621 2.261 15.9581 2.572C16.7204 3.37179 17.8872 4.59739 18.8736 5.63346C19.2735 6.05345 19.6437 6.44229 19.9452 6.759C20.2334 7.062 20.0215 7.565 19.6047 7.566Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </a>

                                            <div class="modal fade" id="uploadFile-{{ $item->id }}" data-bs-backdrop="static"
                                                data-bs-keyboard="false" tabindex="-1" aria-labelledby="uploadFile-{{ $item->id }}" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <form action="{{ route('tracto-camiones.uploadFiles', $item->id) }}" method="POST"
                                                            enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="uploadFile-{{ $item->id }}">Cargar archivo al Tracto Camión o SemiRemolque</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body row">
                                                                <div class="mb-3">
                                                                    <label for="type" class="form-label">Seleccione el Tipo</label>
                                                                    <select name="type" id="" class="form-control">
                                                                        <option value="">-- Seleccione --</option>
                                                                        <option value="tractocamion">Tracto Camión</option>
                                                                        <option value="semiremolque">SemiRemolque</option>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="url_file" class="form-label">Cargar Archivo</label>
                                                                    <input class="form-control" type="file" name="url_file" id="url_file" required>
                                                                </div>

                                                                <div class="mb-3">
                                                                    <label for="name" class="form-label">Nombre del archivo</label>
                                                                    <input class="form-control" type="text" name="name" id="name" required>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-gray" data-bs-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-primary">Guardar Archivo</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <a href="{{ route('tracto-camiones.show', $item->id) }}" class="btn btn-sm btn-icon btn-info " data-toggle="tooltip"
                                                data-placement="top" title="Ver" data-original-title="Ver"
                                                >
                                                <span class="btn-inner">
                                                    <svg width="32" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M22.4541 11.3918C22.7819 11.7385 22.7819 12.2615 22.4541 12.6082C21.0124 14.1335 16.8768 18 12 18C7.12317 18 2.98759 14.1335 1.54586 12.6082C1.21811 12.2615 1.21811 11.7385 1.54586 11.3918C2.98759 9.86647 7.12317 6 12 6C16.8768 6 21.0124 9.86647 22.4541 11.3918Z"
                                                            stroke="currentColor"></path>
                                                        <circle cx="12" cy="12" r="5" stroke="currentColor"></circle>
                                                        <circle cx="12" cy="12" r="3" stroke="currentColor"></circle>
                                                        <mask mask-type="alpha" maskUnits="userSpaceOnUse" x="9" y="9"
                                                            width="6" height="6">
                                                            <circle cx="12" cy="12" r="3" stroke="currentColor"></circle>
                                                        </mask>
                                                        <circle opacity="0.89" cx="13.5" cy="10.5" r="1.5" fill="white">
                                                        </circle>
                                                    </svg>
                                                </span>
                                            </a>

                                            <a href="{{ route('tracto-camiones.edit', $item->id) }}"
                                                class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip"
                                                data-placement="top" title="Editar" data-original-title="Edit" href="#">
                                                <span class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                            </a>
                                            <button class="btn btn-sm btn-icon btn-danger delete-record"
                                                data-toggle="tooltip" data-placement="top" title="Eliminar"
                                                data-original-title="Delete" data-id="{{ $item->id }}">
                                                <span class="btn-inner">
                                                    <svg width="20" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                        <path
                                                            d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M20.708 6.23975H3.75" stroke="currentColor"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round"></path>
                                                        <path
                                                            d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                                                            stroke="currentColor" stroke-width="1.5"
                                                            stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                            <form id="formDelete-{{ $item->id }}"
                                                action="{{ route('tracto-camiones.destroy', $item->id) }}"
                                                method="POST">
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
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function () {
        $('.table tbody').on('click', '.delete-record', function () {
            let dataid = $(this).data('id');
            let formDelete = $('#formDelete-' + dataid);
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
