@extends('layouts.app')
@section('title')
    Gestión de Tracto Caminones - Editar Tracto Camión
@endsection
@section('banner-inicio')
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h1>Editar Tracto Camión</h1>
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
    <div class="col-xl-12 col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a href="{{ route('tracto-camiones.index') }}" class="btn btn-secondary">
                    <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.165 11.9934L13.1634 11.6393C13.1513 10.2348 13.0666 8.98174 12.9206 8.18763C12.9206 8.17331 12.7613 7.38572 12.6599 7.12355C12.5006 6.74463 12.2126 6.42299 11.8515 6.2192C11.5624 6.0738 11.2592 6 10.9417 6C10.6922 6.01157 10.2806 6.13714 9.98692 6.24242L9.74283 6.33596C8.12612 6.97815 5.03561 9.07656 3.85199 10.3598L3.76473 10.4495L3.37527 10.8698C3.12982 11.1915 3 11.5847 3 12.0077C3 12.3866 3.11563 12.7656 3.3469 13.0718C3.41614 13.171 3.52766 13.2983 3.62693 13.4058L4.006 13.8026C5.31046 15.1243 8.13485 16.9782 9.59883 17.5924C9.59883 17.6057 10.5086 17.9857 10.9417 18H10.9995C11.6639 18 12.2846 17.6211 12.6021 17.0086C12.6888 16.8412 12.772 16.5132 12.8352 16.2252L12.949 15.6813C13.0788 14.8067 13.165 13.465 13.165 11.9934ZM19.4967 13.5183C20.3269 13.5183 21 12.8387 21 12.0004C21 11.1622 20.3269 10.4825 19.4967 10.4825L15.7975 10.8097C15.1463 10.8097 14.6183 11.3417 14.6183 12.0004C14.6183 12.6581 15.1463 13.1912 15.7975 13.1912L19.4967 13.5183Z" fill="currentColor"></path>
                    </svg>
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="new-user-info">
                    <form class="" method="POST" action="{{ route('tracto-camiones.update', $data->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="form-label" for="propietario_id">Propietario:</label>
                                <select name="propietario_id" id="" class="form-control">
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($propietarios as $propietario)
                                        <option value="{{ $propietario->id }}" {{ $propietario->id == $data->propietario_id ? 'selected' : '' }}>{{ $propietario->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('propietario_id'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('propietario_id') }}</em></small>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="conductor_id">Conductor:</label>
                                <select name="conductor_id" id="" class="form-control">
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($conductores as $conductor)
                                        <option value="{{ $conductor->id }}" {{ $conductor->id == $data->conductor_id ? 'selected' : '' }}>{{ $conductor->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('conductor_id'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('conductor_id') }}</em></small>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-12">
                                <h5>Información del Tracto Camión</h5>
                            </div>
                            <hr>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="placa">Placa:</label>
                                <input type="text" class="form-control" name="placa" id="placa"
                                    value="{{ $data->placa }}" >
                                @if ($errors->has('placa'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('placa') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="chasis">Número de Chasis:</label>
                                <input type="text" class="form-control" name="chasis" id="chasis"
                                    value="{{ $data->chasis }}" >
                                @if ($errors->has('chasis'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('chasis') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="motor">Número de Motor:</label>
                                <input type="text" class="form-control" name="motor" id="motor"
                                    value="{{ $data->motor }}" >
                                @if ($errors->has('motor'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('motor') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="anio">Año:</label>
                                <input type="number" class="form-control" name="anio" id="anio"
                                    value="{{ $data->anio }}" >
                                @if ($errors->has('anio'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('anio') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="tipo_vehiculo">Tipo de Vehículo:</label>
                                <select name="tipo_vehiculo" id="tipo_vehiculo" class="form-control">
                                    <option value="">-- Seleccione --</option>
                                    <option value="Carro" {{ $data->tipo_vehiculo == 'Carro' ? 'selected' : '' }} >Carro</option>
                                    <option value="Camioneta" {{ $data->tipo_vehiculo == 'Camioneta' ? 'selected' : '' }}>Camioneta</option>
                                    <option value="Camion" {{ $data->tipo_vehiculo == 'Camion' ? 'selected' : '' }}>Camion</option>
                                </select>
                                @if ($errors->has('tipo_vehiculo'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('tipo_vehiculo') }}</em></small>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="color">Color:</label>
                                <input type="text" class="form-control" name="color" id="color"
                                    value="{{ $data->color }}" >
                                @if ($errors->has('color'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('color') }}</em></small>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="ejes">Número de Ejes:</label>
                                <input type="number" class="form-control" name="ejes" id="ejes"
                                    value="{{ $data->ejes }}" >
                                @if ($errors->has('ejes'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('ejes') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="marca">Marca:</label>
                                <input type="text" class="form-control" name="marca" id="marca"
                                    value="{{ $data->marca }}" >
                                @if ($errors->has('marca'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('marca') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="asientos">Número de Asientos:</label>
                                <input type="number" class="form-control" name="asientos" id="asientos"
                                    value="{{ $data->asientos }}">
                                @if ($errors->has('asientos'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('asientos') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="capacidad_arrastre">Capacidad de Arrastre:</label>
                                <input type="number" class="form-control" name="capacidad_arrastre" id="capacidad_arrastre"
                                    value="{{ $data->capacidad_arrastre }}" >
                                @if ($errors->has('capacidad_arrastre'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('capacidad_arrastre') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="modelo">Modelo:</label>
                                <input type="text" class="form-control" name="modelo" id="modelo"
                                    value="{{ $data->modelo }}">
                                @if ($errors->has('modelo'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('modelo') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="cilindraje">Cilindraje:</label>
                                <input type="number" class="form-control" name="cilindraje" id="cilindraje"
                                    value="{{ $data->cilindraje }}">
                                @if ($errors->has('cilindraje'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('cilindraje') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="traccion">Tracción:</label>
                                <input type="number" class="form-control" name="traccion" id="traccion"
                                    value="{{ $data->traccion }}" >
                                @if ($errors->has('traccion'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('traccion') }}</em></small>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="url_file_seguro">PDF de Seguro CTI:</label>
                                <input type="file" class="form-control" name="url_file_seguro" id="url_file_seguro">
                                @if ($errors->has('url_file_seguro'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('url_file_seguro') }}</em></small>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="fechai_seguro_cti">Fecha de Inicio Seguro CTI:</label>
                                <input type="date" class="form-control" name="fechai_seguro_cti" id="fechai_seguro_cti"
                                    value="{{ $data->fechai_seguro_cti }}">
                                @if ($errors->has('fechai_seguro_cti'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('fechai_seguro_cti') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="fechaf_seguro_cti">Fecha de Salida Seguro CTI:</label>
                                <input type="date" class="form-control" name="fechaf_seguro_cti" id="fechaf_seguro_cti"
                                    value="{{ $data->fechaf_seguro_cti }}">
                                @if ($errors->has('fechaf_seguro_cti'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('fechaf_seguro_cti') }}</em></small>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-12">
                                <h5>Información del Semi Remolque</h5>
                            </div>
                            <hr>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="placas">Placa:</label>
                                <input type="text" class="form-control" name="placas" id="placas"
                                    value="{{ $data->semiRemolque->placa }}" >
                                @if ($errors->has('placas'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('placas') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="chasiss">Número de Chasis:</label>
                                <input type="text" class="form-control" name="chasiss" id="chasiss"
                                    value="{{ $data->semiRemolque->chasis }}" >
                                @if ($errors->has('chasiss'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('chasiss') }}</em></small>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="series">Número de Serie:</label>
                                <input type="text" class="form-control" name="series" id="series"
                                    value="{{ $data->semiRemolque->serie }}" >
                                @if ($errors->has('series'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('series') }}</em></small>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="anios">Año:</label>
                                <input type="number" class="form-control" name="anios" id="anio"
                                    value="{{ $data->semiRemolque->anio }}" >
                                @if ($errors->has('anios'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('anios') }}</em></small>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="colors">Color:</label>
                                <input type="text" class="form-control" name="colors" id="colors"
                                    value="{{ $data->semiRemolque->color }}" >
                                @if ($errors->has('colors'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('colors') }}</em></small>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="marcas">Marca:</label>
                                <input type="text" class="form-control" name="marcas" id="marcas"
                                    value="{{ $data->semiRemolque->marca }}" >
                                @if ($errors->has('marcas'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('marcas') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="tipo_carroceria">Tipo de Carrocería:</label>
                                <select name="tipo_carroceria" id="tipo_carroceria" class="form-control">
                                    <option value="">-- Seleccione --</option>
                                    <option value="Sedan" @if ($data->semiRemolque->tipo_carroceri == 'Sedan') selected @endif >Sedan</option>
                                    <option value="SUV" @if ($data->semiRemolque->tipo_carroceria == 'SUV') selected @endif>SUV</option>
                                    <option value="Minivan" @if ($data->semiRemolque->tipo_carroceria == 'Minivan') selected @endif>Minivan</option>
                                    <option value="Pickup" @if ($data->semiRemolque->tipo_carroceria == 'Pickup') selected @endif>Pickup</option>
                                    <option value="Hatchback" @if ($data->semiRemolque->tipo_carroceria == 'Hatchback') selected @endif>Hatchback</option>
                                    <option value="Coupe" @if ($data->semiRemolque->tipo_carroceria == 'Coupe') selected @endif>Coupe</option>
                                    <option value="Convertible" @if ($data->semiRemolque->tipo_carroceria == 'Convertible') selected @endif>Convertible</option>
                                    <option value="Crossover" @if ($data->semiRemolque->tipo_carroceria == 'Crossover') selected @endif>Crossover</option>
                                    <option value="Truck" @if ($data->semiRemolque->tipo_carroceria == 'Truck') selected @endif>Truck</option>
                                    <option value="Van" @if ($data->semiRemolque->tipo_carroceria == 'Van') selected @endif>Van</option>
                                    <option value="Bus" @if ($data->semiRemolque->tipo_carroceria == 'Bus') selected @endif>Bus</option>
                                    <option value="Trailer" @if ($data->semiRemolque->tipo_carroceria == 'Trailer') selected @endif>Trailer</option>
                                </select>
                                @if ($errors->has('tipo_carroceria'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('tipo_carroceria') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="ejess">Número de Ejes:</label>
                                <input type="number" class="form-control" name="ejess" id="ejess"
                                    value="{{ $data->semiRemolque->ejes }}" >
                                @if ($errors->has('ejess'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('ejess') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="capacidad_total">Capacidad Total:</label>
                                <input type="number" class="form-control" name="capacidad_total" id="capacidad_total"
                                    value="{{ $data->semiRemolque->capacidad_total }}" placeholder="">
                                @if ($errors->has('capacidad_total'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('capacidad_total') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="capacidad_compartimiento1">Capacidad 1er compartimiento:</label>
                                <input type="number" class="form-control" name="capacidad_compartimiento1" id="capacidad_compartimiento1"
                                    value="{{ $data->semiRemolque->capacidad_compartimiento1 }}" placeholder="">
                                @if ($errors->has('capacidad_compartimiento1'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('capacidad_compartimiento1') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="capacidad_compartimiento2">Capacidad 2do compartimiento:</label>
                                <input type="number" class="form-control" name="capacidad_compartimiento2" id="capacidad_compartimiento2"
                                    value="{{ $data->semiRemolque->capacidad_compartimiento2 }}" placeholder="">
                                @if ($errors->has('capacidad_compartimiento2'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('capacidad_compartimiento2') }}</em></small>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="url_file_tarjeta_operacion">PDF de Tarjeta de Operación de cisterna:</label>
                                <input type="file" class="form-control" name="url_file_tarjeta_operacion" id="url_file_tarjeta_operacion">
                                @if ($errors->has('url_file_tarjeta_operacion'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('url_file_tarjeta_operacion') }}</em></small>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label class="form-label" for="fechai_tarjeta_operacion">Fecha de Inicio Tarjeta de Operación de cisterna:</label>
                                <input type="date" class="form-control" name="fechai_tarjeta_operacion" id="fechai_tarjeta_operacion"
                                    value="{{ $data->semiRemolque->fechai_tarjeta_operacion }}">
                                @if ($errors->has('fechai_tarjeta_operacion'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('fechai_tarjeta_operacion') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="fechaf_tarjeta_operacion">Fecha de Vec. Tarjeta de Operación de cisterna:</label>
                                <input type="date" class="form-control" name="fechaf_tarjeta_operacion" id="fechaf_tarjeta_operacion"
                                    value="{{ $data->semiRemolque->fechaf_tarjeta_operacion }}">
                                @if ($errors->has('fechaf_tarjeta_operacion'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('fechaf_tarjeta_operacion') }}</em></small>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-3">
                            <button type="submit" class="btn btn-primary">
                                <svg width="20px" height="20px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ffffff"><path d="M3 19V5C3 3.89543 3.89543 3 5 3H16.1716C16.702 3 17.2107 3.21071 17.5858 3.58579L20.4142 6.41421C20.7893 6.78929 21 7.29799 21 7.82843V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19Z" stroke="#ffffff" stroke-width="1.5"></path><path d="M8.6 9H15.4C15.7314 9 16 8.73137 16 8.4V3.6C16 3.26863 15.7314 3 15.4 3H8.6C8.26863 3 8 3.26863 8 3.6V8.4C8 8.73137 8.26863 9 8.6 9Z" stroke="#ffffff" stroke-width="1.5"></path><path d="M6 13.6V21H18V13.6C18 13.2686 17.7314 13 17.4 13H6.6C6.26863 13 6 13.2686 6 13.6Z" stroke="#ffffff" stroke-width="1.5"></path></svg>
                                Actualizar
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
