<?php

namespace App\Http\Controllers;

use App\Models\Tramo;
use App\Models\Entrega;
use App\Models\Product;
use App\Models\Propietario;
use App\Models\Conciliacion;
use App\Models\TractoCamion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEntrega;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Entrega::all();
        return view('entregas.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $propietarios = Propietario::all();
        $tramos = Tramo::all();
        $conciliaciones = Conciliacion::all();
        $products = Product::all();
        $tractocamiones = TractoCamion::all();

        return view('entregas.create', compact('propietarios', 'tramos', 'conciliaciones', 'products', 'tractocamiones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntrega $request)
    {
        Entrega::create([
            'conciliacion'          => $request->conciliacion,
            'numeracion_conciliacion' => $request->numeracion_conciliacion,
            'codigo_conciliacion'   => $request->conciliacion.""."$request->numeracion_conciliacion",
            'mes'                   => $request->mes,
            'propietario_id'        => $request->propietario_id,
            'tracto_camion_id'      => $request->tracto_camion_id,
            'tramo_id'              => $request->tramo_id,
            'product_id'            => $request->product_id,
            'tolerance_percentage'  => $request->tolerance_percentage,
            'fecha_carga'           => $request->fecha_carga,
            'carguio'               => $request->carguio,
            'fecha_llegada'         => $request->fecha_llegada,
            'volumen_descarguio'    => $request->volumen_descarguio,
            'merma'                 => $request->merma,
            'cobros_merma'          => $request->cobros_merma,
            'merma_permisible'      => $request->merma_permisible,
            'merma_limite_excedible' => $request->merma_limite_excedible,
            'merma_cobrable'        => $request->merma_cobrable,
            'precio_merma'          => $request->precio_merma,
            'merma_por_cobrar'      => $request->merma_por_cobrar,
            'flete'                 => $request->flete,
            'liquido_basico'        => $request->liquido_basico,
            'derecho_empresa_porcentaje' => $request->derecho_empresa_porcentaje,
            'derecho_empresa'       => $request->derecho_empresa,
            'liquido_facturado'     => $request->liquido_facturado,
            'retenciones'           => $request->retenciones,
            'liquido_pagable'       => $request->liquido_pagable,
            'fecha_pago'            => $request->fecha_pago,
            'fecha_pago_limite'     => $request->fecha_pago_limite,
            'total_anticipos'       => $request->total_anticipos,
            'total'                 => $request->total,
            'total_deuda'           => $request->total_deuda,
            'factura_n'             => $request->factura_n,
            'factura_apoyo'         => $request->factura_apoyo,
            'fecha_factura'         => $request->fecha_factura,
            'fecha'                 => $request->fecha,
        ]);
        return redirect()->route('entrega.index')->with('success', 'Distribución creado exitosamente!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $propietarios = Propietario::all();
        $tramos = Tramo::all();
        $conciliaciones = Conciliacion::all();
        $products = Product::all();
        $tractocamiones = TractoCamion::all();
        $data = Entrega::find($id);
        return view('entregas.edit', compact('data', 'propietarios', 'tramos', 'conciliaciones', 'products', 'tractocamiones'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTramo $request, string $id)
    {
        $data = Entrega::find($id);
        $data->update($request->all());
        return redirect()->route('entrega.index')->with('success', 'Distribución actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Entrega::find($id);
        $data->delete();
        return redirect()->route('entrega.index')->with('success', 'Distribución eliminado exitosamente!');
    }

    public function getProducts(Request $request)
    {
        $id = $request->id;
        $products = Product::find($id);
        return response()->json($products);
    }
}
