@extends('layouts.app')
@section('title')
    Gestión de Distribuciones
@endsection
@section('s')

@endsection
@section('banner-inicio')
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h1>Gestión de Reportes</h1>
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
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Generar Reporte de Conciliaciones</h4>
               </div>
            </div>
            <div class="card-body px-0">
                <form action="{{ route('reportes.generar') }}" method="POST">
                    @csrf
                    <div class="row p-3">
                        <div class="col-md-3">
                            <label class="form-label" for="conciliacion">Conciliación:</label>
                            <select name="conciliacion" class="form-select form-select-sm  " id="">
                                <option value="">-- Seleccione --</option>
                                @foreach ($conciliaciones as $item)
                                    <option value="{{ $item->name }}" @if( old('conciliacion') == $item->name ) selected @endif >{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="conciliacion">Fecha de Inicio:</label>
                            <input type="date" name="start" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label" for="conciliacion">Fecha Final:</label>
                            <input type="date" name="end" class="form-control form-control-sm">
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary btn-sm" >Generar Reporte</button>
                        </div>
                    </div>
                </form>
            </div>
         </div>
      </div>
   </div>
@endsection
@section('scripts')

@endsection
