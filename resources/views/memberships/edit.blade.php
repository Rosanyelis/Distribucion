@extends('layouts.app')
@section('banner-inicio')
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h1>Editar Membresía</h1>
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
                <a href="{{ route('membership.index') }}" class="btn btn-secondary">
                    <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.165 11.9934L13.1634 11.6393C13.1513 10.2348 13.0666 8.98174 12.9206 8.18763C12.9206 8.17331 12.7613 7.38572 12.6599 7.12355C12.5006 6.74463 12.2126 6.42299 11.8515 6.2192C11.5624 6.0738 11.2592 6 10.9417 6C10.6922 6.01157 10.2806 6.13714 9.98692 6.24242L9.74283 6.33596C8.12612 6.97815 5.03561 9.07656 3.85199 10.3598L3.76473 10.4495L3.37527 10.8698C3.12982 11.1915 3 11.5847 3 12.0077C3 12.3866 3.11563 12.7656 3.3469 13.0718C3.41614 13.171 3.52766 13.2983 3.62693 13.4058L4.006 13.8026C5.31046 15.1243 8.13485 16.9782 9.59883 17.5924C9.59883 17.6057 10.5086 17.9857 10.9417 18H10.9995C11.6639 18 12.2846 17.6211 12.6021 17.0086C12.6888 16.8412 12.772 16.5132 12.8352 16.2252L12.949 15.6813C13.0788 14.8067 13.165 13.465 13.165 11.9934ZM19.4967 13.5183C20.3269 13.5183 21 12.8387 21 12.0004C21 11.1622 20.3269 10.4825 19.4967 10.4825L15.7975 10.8097C15.1463 10.8097 14.6183 11.3417 14.6183 12.0004C14.6183 12.6581 15.1463 13.1912 15.7975 13.1912L19.4967 13.5183Z" fill="currentColor"></path>
                    </svg>
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="new-user-info">
                    <form class="" method="POST" action="{{ route('membership.update', $data->id) }}">
                        @csrf
                        <div class="row">
                        <div class="form-group col-md-6">
                                <label class="form-label" for="uname">Nombre de Membresía:</label>
                                <input type="text" class="form-control" name="name" id="uname"
                                    value="{{ $data->name }}" placeholder="Ejem: Oro">
                                @if ($errors->has('name'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('name') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="description">Descripción:</label>
                                <input type="text" class="form-control" name="description" id="description"
                                    value="{{ $data->description }}" placeholder="Ejem: Membresía con mas duración en el gimnasio">
                                @if ($errors->has('description'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('description') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="duration">Duración de Días de Membresía:</label>
                                <input type="number" class="form-control" name="duration" id="duration"
                                    value="{{ $data->duration }}" placeholder="Ejem: 180">
                                @if ($errors->has('duration'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('duration') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="price">Costo ($):</label>
                                <input type="text" class="form-control" name="price" id="price"
                                    value="{{ $data->price }}" placeholder="Ejem: 20.00">
                                @if ($errors->has('price'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('price') }}</em></small>
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
