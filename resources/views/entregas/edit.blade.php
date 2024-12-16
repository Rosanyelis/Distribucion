@extends('layouts.app')
@section('banner-inicio')
<div class="iq-navbar-header" style="height: 215px;">
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div>
                        <h1>Editar Datos de Distribucion</h1>
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
                <a href="{{ route('conciliacion.index') }}" class="btn btn-secondary">
                    <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.165 11.9934L13.1634 11.6393C13.1513 10.2348 13.0666 8.98174 12.9206 8.18763C12.9206 8.17331 12.7613 7.38572 12.6599 7.12355C12.5006 6.74463 12.2126 6.42299 11.8515 6.2192C11.5624 6.0738 11.2592 6 10.9417 6C10.6922 6.01157 10.2806 6.13714 9.98692 6.24242L9.74283 6.33596C8.12612 6.97815 5.03561 9.07656 3.85199 10.3598L3.76473 10.4495L3.37527 10.8698C3.12982 11.1915 3 11.5847 3 12.0077C3 12.3866 3.11563 12.7656 3.3469 13.0718C3.41614 13.171 3.52766 13.2983 3.62693 13.4058L4.006 13.8026C5.31046 15.1243 8.13485 16.9782 9.59883 17.5924C9.59883 17.6057 10.5086 17.9857 10.9417 18H10.9995C11.6639 18 12.2846 17.6211 12.6021 17.0086C12.6888 16.8412 12.772 16.5132 12.8352 16.2252L12.949 15.6813C13.0788 14.8067 13.165 13.465 13.165 11.9934ZM19.4967 13.5183C20.3269 13.5183 21 12.8387 21 12.0004C21 11.1622 20.3269 10.4825 19.4967 10.4825L15.7975 10.8097C15.1463 10.8097 14.6183 11.3417 14.6183 12.0004C14.6183 12.6581 15.1463 13.1912 15.7975 13.1912L19.4967 13.5183Z" fill="currentColor"></path>
                    </svg>
                    Regresar
                </a>
            </div>
            <div class="card-body">
                <div class="new-user-info">
                    <form class="" method="POST" action="{{ route('entrega.update', $data->id) }}" enctype="multipart/form-data" id="formUpdate-{{ $data->id }}-entrega') }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="form-label" for="conciliacion">Código de Conciliación:</label>
                                <select name="conciliacion" class="form-control " id="">
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($conciliaciones as $item)
                                        <option value="{{ $item->name }}" @if( old('conciliacion', $data->conciliacion) == $item->name ) selected @endif >{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('conciliacion'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('conciliacion') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="numeracion_conciliacion">Númeración de Conciliación:</label>
                                <select name="numeracion_conciliacion" class="form-control" id="">
                                    <option value="">-- Seleccione --</option>
                                    <option value="/1" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/1' ) selected @endif >/1</option>
                                    <option value="/2" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/2' ) selected @endif >/2</option>
                                    <option value="/3" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/3' ) selected @endif >/3</option>
                                    <option value="/4" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/4' ) selected @endif >/4</option>
                                    <option value="/5" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/5' ) selected @endif >/5</option>
                                    <option value="/6" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/6' ) selected @endif >/6</option>
                                    <option value="/7" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/7' ) selected @endif >/7</option>
                                    <option value="/8" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/8' ) selected @endif >/8</option>
                                    <option value="/9" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/9' ) selected @endif >/9</option>
                                    <option value="/10" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/10' ) selected @endif >/10</option>
                                    <option value="/11" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/11' ) selected @endif >/11</option>
                                    <option value="/12" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/12' ) selected @endif >/12</option>
                                    <option value="/13" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/13' ) selected @endif >/13</option>
                                    <option value="/14" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/14' ) selected @endif >/14</option>
                                    <option value="/15" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/15' ) selected @endif >/15</option>
                                    <option value="/16" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/16' ) selected @endif >/16</option>
                                    <option value="/17" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/17' ) selected @endif >/17</option>
                                    <option value="/18" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/18' ) selected @endif >/18</option>
                                    <option value="/19" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/19' ) selected @endif >/19</option>
                                    <option value="/20" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/20' ) selected @endif >/20</option>
                                    <option value="/21" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/21' ) selected @endif >/21</option>
                                    <option value="/22" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/22' ) selected @endif >/22</option>
                                    <option value="/23" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/23' ) selected @endif >/23</option>
                                    <option value="/24" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/24' ) selected @endif >/24</option>
                                    <option value="/25" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/25' ) selected @endif >/25</option>
                                    <option value="/26" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/26' ) selected @endif >/26</option>
                                    <option value="/27" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/27' ) selected @endif >/27</option>
                                    <option value="/28" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/28' ) selected @endif >/28</option>
                                    <option value="/29" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/29' ) selected @endif >/29</option>
                                    <option value="/30" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/30' ) selected @endif >/30</option>
                                    <option value="/31" @if( old('numeracion_conciliacion', $data->numeracion_conciliacion) == '/31' ) selected @endif >/31</option>
                                </select>
                                @if ($errors->has('numeracion_conciliacion'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('numeracion_conciliacion') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="mes">Mes:</label>
                                <select name="mes" class="form-control" id="">
                                    <option value="">-- Seleccione --</option>
                                    <option value="Enero" @if( old('mes', $data->mes) == 'Enero' ) selected @endif>Enero</option>
                                    <option value="Febrero" @if( old('mes',$data->mes) == 'Febrero' ) selected @endif>Febrero</option>
                                    <option value="Marzo" @if( old('mes',$data->mes) == 'Marzo' ) selected @endif>Marzo</option>
                                    <option value="Abril" @if( old('mes',$data->mes) == 'Abril' ) selected @endif>Abril</option>
                                    <option value="Mayo" @if( old('mes',$data->mes) == 'Mayo' ) selected @endif>Mayo</option>
                                    <option value="Junio" @if( old('mes',$data->mes) == 'Junio' ) selected @endif>Junio</option>
                                    <option value="Julio" @if( old('mes',$data->mes) == 'Julio' ) selected @endif>Julio</option>
                                    <option value="Agosto" @if( old('mes',$data->mes) == 'Agosto' ) selected @endif>Agosto</option>
                                    <option value="Septiembre" @if( old('mes',$data->mes) == 'Septiembre' ) selected @endif>Septiembre</option>
                                    <option value="Octubre" @if( old('mes',$data->mes) == 'Octubre' ) selected @endif>Octubre</option>
                                    <option value="Noviembre"  @if( old('mes',$data->mes) == 'Noviembre' ) selected @endif>Noviembre</option>
                                    <option value="Diciembre" @if( old('mes',$data->mes) == 'Diciembre' ) selected @endif>Diciembre</option>
                                </select>
                                @if ($errors->has('mes'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('mes') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="propietario_id">Propietario:</label>
                                <select name="propietario_id" class="form-control" id="">
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($propietarios as $item)
                                        <option value="{{ $item->id }}" @if( old('propietario_id', $data->propietario_id) == $item->id ) selected @endif>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('propietario_id'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('propietario_id') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="tracto_camion_id">Placa:</label>
                                <select name="tracto_camion_id" class="form-control" id="">
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($tractocamiones as $item)
                                        <option value="{{ $item->id }}" @if( old('tracto_camion_id', $data->tracto_camion_id) == $item->id ) selected @endif>{{$item->propietario->name}} - {{ $item->placa }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('tracto_camion_id'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('tracto_camion_id') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="tramo_id">Tramo:</label>
                                <select name="tramo_id" class="form-control" id="">
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($tramos as $item)
                                        <option value="{{ $item->id }}" @if( old('tramo_id', $data->tramo_id) == $item->id ) selected @endif>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('tramo_id'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('tramo_id') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="product_id">Producto:</label>
                                <select name="product_id" class="form-control" id="product_id">
                                    <option value="">-- Seleccione --</option>
                                    @foreach ($products as $item)
                                        <option value="{{ $item->id }}" @if( old('product_id', $data->product_id) == $item->id ) selected @endif>{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('product_id'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('product_id') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="tolerance_percentage">% de Tolerancia de Producto:</label>
                                <input type="text" class="form-control" name="tolerance_percentage" id="tolerance_percentage"
                                    value="{{ old('tolerance_percentage', $data->tolerance_percentage) }}" readonly>
                                @if ($errors->has('tolerance_percentage'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('tolerance_percentage') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="fecha_carga">Fecha de Carga:</label>
                                <input type="date" class="form-control" name="fecha_carga" id="fecha_carga"
                                    value="{{ old('fecha_carga', $data->fecha_carga) }}">
                                @if ($errors->has('fecha_carga'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('fecha_carga') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="carguio">Carguio:</label>
                                <input type="text" class="form-control" name="carguio" id="carguio"
                                    value="{{ old('carguio', $data->carguio) }}">
                                @if ($errors->has('carguio'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('carguio') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="fecha_llegada">Fecha de Llegada:</label>
                                <input type="date" class="form-control" name="fecha_llegada" id="fecha_llegada"
                                    value="{{ old('fecha_llegada', $data->fecha_llegada) }}">
                                @if ($errors->has('fecha_llegada'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('fecha_llegada') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="volumen_descarguio">Volumen Descarguio:</label>
                                <input type="text" class="form-control" name="volumen_descarguio" id="volumen_descarguio"
                                    value="{{ old('volumen_descarguio', $data->volumen_descarguio) }}">
                                @if ($errors->has('volumen_descarguio'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('volumen_descarguio') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="merma">Merma:</label>
                                <input type="text" class="form-control" name="merma" id="merma"
                                    value="{{ old('merma', $data->merma) }}" readonly>
                                @if ($errors->has('merma'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('merma') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="cobros_merma">Cobros al 100% de la merma:</label>
                                <input type="text" class="form-control" name="cobros_merma" id="cobros_merma"
                                    value="{{ old('cobros_merma', $data->cobros_merma) }}" readonly>
                                @if ($errors->has('cobros_merma'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('cobros_merma') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="merma_permisible">Merma Permisible:</label>
                                <input type="text" class="form-control" name="merma_permisible" id="merma_permisible"
                                    value="{{ old('merma_permisible', $data->merma_permisible) }}" readonly>
                                @if ($errors->has('merma_permisible'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('merma_permisible') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="merma_limite_excedible">Merma Limite Excedible:</label>
                                <input type="text" class="form-control" name="merma_limite_excedible" id="merma_limite_excedible"
                                    value="{{ old('merma_limite_excedible', $data->merma_limite_excedible) }}" readonly>
                                @if ($errors->has('merma_limite_excedible'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('merma_limite_excedible') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="merma_cobrable">Merma Cobrable:</label>
                                <input type="text" class="form-control" name="merma_cobrable" id="merma_cobrable"
                                    value="{{ old('merma_cobrable', $data->merma_cobrable) }}" readonly>
                                @if ($errors->has('merma_cobrable'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('merma_cobrable') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="precio_merma">Precio de Merma:</label>
                                <input type="text" class="form-control" name="precio_merma" id="precio_merma"
                                    value="{{ old('precio_merma, $data->precio_merma') }}">
                                @if ($errors->has('precio_merma'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('precio_merma') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="merma_por_cobrar">Merma por Cobrar:</label>
                                <input type="text" class="form-control" name="merma_por_cobrar" id="merma_por_cobrar"
                                    value="{{ old('merma_por_cobrar', $data->merma_por_cobrar) }}" readonly>
                                @if ($errors->has('merma_por_cobrar'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('merma_por_cobrar') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="flete">Flete:</label>
                                <input type="text" class="form-control" name="flete" id="flete"
                                    value="{{ old('flete', $data->flete) }}">
                                @if ($errors->has('flete'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('flete') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="liquido_basico">Liquido Basico:</label>
                                <input type="text" class="form-control" name="liquido_basico" id="liquido_basico"
                                    value="{{ old('liquido_basico', $data->liquido_basico) }}" readonly>
                                @if ($errors->has('liquido_basico'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('liquido_basico') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="derecho_empresa_porcentaje">% Derecho de Empresa:</label>
                                <input type="text" class="form-control" name="derecho_empresa_porcentaje" id="derecho_empresa_porcentaje"
                                    value="{{ old('derecho_empresa_porcentaje', $data->derecho_empresa_porcentaje) }}">
                                @if ($errors->has('derecho_empresa_porcentaje'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('derecho_empresa_porcentaje') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="derecho_empresa">Derecho de Empresa:</label>
                                <input type="text" class="form-control" name="derecho_empresa" id="derecho_empresa"
                                    value="{{ old('derecho_empresa', $data->derecho_empresa) }}" readonly>
                                @if ($errors->has('derecho_empresa'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('derecho_empresa') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="liquido_facturado">Liquido Facturado:</label>
                                <input type="text" class="form-control" name="liquido_facturado" id="liquido_facturado"
                                    value="{{ old('liquido_facturado', $data->liquido_facturado) }}" readonly>
                                @if ($errors->has('liquido_facturado'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('liquido_facturado') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="retenciones">7% Retenciones YPFB:</label>
                                <input type="text" class="form-control" name="retenciones" id="retenciones"
                                    value="{{ old('retenciones', $data->retenciones) }}">
                                @if ($errors->has('retenciones'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('retenciones') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="liquido_pagable">Liquido Pagable:</label>
                                <input type="text" class="form-control" name="liquido_pagable" id="liquido_pagable"
                                    value="{{ old('liquido_pagable', $data->liquido_pagable) }}" readonly>
                                @if ($errors->has('liquido_pagable'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('liquido_pagable') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="fecha_pago">Fecha de Pago:</label>
                                <input type="date" class="form-control" name="fecha_pago" id="fecha_pago"
                                    value="{{ old('fecha_pago', $data->fecha_pago) }}">
                                @if ($errors->has('fecha_pago'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('fecha_pago') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="fecha_pago_limite">Fecha de Pago Literal:</label>
                                <input type="date" class="form-control" name="fecha_pago_limite" id="fecha_pago_limite"
                                    value="{{ old('fecha_pago_limite', $data->fecha_pago_limite) }}">
                                @if ($errors->has('fecha_pago_limite'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('fecha_pago_limite') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="total_anticipos">Total Anticipos:</label>
                                <input type="text" class="form-control" name="total_anticipos" id="total_anticipos"
                                    value="{{ old('total_anticipos', $data->total_anticipos) }}">
                                @if ($errors->has('total_anticipos'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('total_anticipos') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="total">Total:</label>
                                <input type="text" class="form-control" name="total" id="total"
                                    value="{{ old('total', $data->total) }}" readonly>
                                @if ($errors->has('total'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('total') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="total_deuda">Total Deuda:</label>
                                <input type="text" class="form-control" name="total_deuda" id="total_deuda"
                                    value="{{ old('total_deuda', $data->total_deuda) }}">
                                @if ($errors->has('total_deuda'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('total_deuda') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="factura_n">Factura N°:</label>
                                <input type="text" class="form-control" name="factura_n" id="factura_n"
                                    value="{{ old('factura_n', $data->factura_n) }}">
                                @if ($errors->has('factura_n'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('factura_n') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="fecha">Fecha:</label>
                                <input type="date" class="form-control" name="fecha" id="fecha"
                                    value="{{ old('fecha', $data->fecha) }}">
                                @if ($errors->has('fecha'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('fecha') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="factura_apoyo">N° Fac. Apoyo:</label>
                                <input type="text" class="form-control" name="factura_apoyo" id="factura_apoyo"
                                    value="{{ old('factura_apoyo', $data->factura_apoyo) }}">
                                @if ($errors->has('factura_apoyo'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('factura_apoyo') }}</em></small>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label class="form-label" for="fecha_factura">Fecha de Factura:</label>
                                <input type="date" class="form-control" name="fecha_factura" id="fecha_factura"
                                    value="{{ old('fecha_factura', $data->fecha_factura) }}">
                                @if ($errors->has('fecha_factura'))
                                    <span class="text-danger">
                                        <small><em>{{ $errors->first('fecha_factura') }}</em></small>
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
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#product_id').on('change', function() {
                let product_id = $('#product_id').val();
                $.get('/get-productos/' + product_id , function(data) {
                    console.log(data);
                    $('#tolerance_percentage').val(data.tolerance_percentage);
                });
            });

            $('#volumen_descarguio').on('change', function() {
                let carguio = $('#carguio').val();
                let volumen_descarguio = $('#volumen_descarguio').val();
                let merma = 0;
                total = parseFloat(carguio) - parseFloat(volumen_descarguio);
                merma = total;
                $('#merma').val(merma).trigger('change');
                $('#cobros_merma').val(merma);
            });

            $('#carguio').on('change', function() {
                let tolerance_percentage = $('#tolerance_percentage').val();
                let carguio = $('#carguio').val();
                let merma_limite_excedible = 0;
                total = parseFloat(carguio) * (parseFloat(tolerance_percentage) / 100);
                merma_limite_excedible = total.toFixed(0);
                $('#merma_permisible').val(merma_limite_excedible);
                $('#merma_limite_excedible').val(merma_limite_excedible);
            });

            $('#merma').on('change', function() {
                let merma = $('#merma').val();
                let merma_permisible = $('#merma_permisible').val();
                let merma_cobrable = 0;
                merma_cobrable = merma - merma_permisible;
                $('#merma_cobrable').val(merma_cobrable);
            });

            $('#precio_merma').on('change', function() {
                let precio_merma = $('#precio_merma').val();
                let merma_cobrable = $('#merma_cobrable').val();
                let merma_por_cobrar = 0;
                merma_por_cobrar = parseFloat(merma_cobrable) * parseFloat(precio_merma);
                $('#merma_por_cobrar').val(merma_por_cobrar.toFixed(2));
            });

            $('#flete').on('change', function() {
                let flete = $('#flete').val();
                let volumen_descarguio = $('#volumen_descarguio').val();
                let liquido_basico = 0;
                total = parseFloat(volumen_descarguio) * parseFloat(flete);
                liquido_basico = total.toFixed(2);
                $('#liquido_basico').val(liquido_basico);
            });

            $('#derecho_empresa_porcentaje').on('change', function() {
                let liquido_basico = $('#liquido_basico').val();
                let derecho_empresa_porcentaje = $('#derecho_empresa_porcentaje').val();
                let derecho_empresa = 0;
                derecho_empresa = parseFloat(liquido_basico) * (parseFloat(derecho_empresa_porcentaje) / 100);
                $('#derecho_empresa').val(derecho_empresa.toFixed(0)).trigger('change');
            });

            $('#derecho_empresa').on('change', function() {
                let liquido_basico = $('#liquido_basico').val();
                let derecho_empresa = $('#derecho_empresa').val();
                let liquido_facturado = 0;
                liquido_facturado = parseFloat(liquido_basico) - parseFloat(derecho_empresa);
                $('#liquido_facturado').val(liquido_facturado.toFixed(0));
            });

            $('#retenciones').on('change', function() {
                let liquido_facturado = $('#liquido_facturado').val();
                let retenciones = $('#retenciones').val();
                let merma_por_cobrar = $('#merma_por_cobrar').val();
                let liquido_pagable = 0;
                total = parseFloat(liquido_facturado) - parseFloat(retenciones) - parseFloat(merma_por_cobrar);
                liquido_pagable = total.toFixed(2);
                $('#liquido_pagable').val(liquido_pagable);
            });

            $('#total_anticipos').on('change', function() {
                let liquido_pagable = $('#liquido_pagable').val();
                let merma_por_cobrar = $('#merma_por_cobrar').val();
                let total_anticipo = $('#total_anticipos').val();
                let total = 0;
                total = parseFloat(liquido_pagable) - parseFloat(merma_por_cobrar) - parseFloat(total_anticipo);
                $('#total').val(total.toFixed(2));
            });
        });
    </script>
@endsection
