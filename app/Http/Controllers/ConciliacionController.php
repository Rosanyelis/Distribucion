<?php

namespace App\Http\Controllers;

use App\Models\Conciliacion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConciliacion;
use App\Http\Requests\UpdateConciliacion;

class ConciliacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Conciliacion::all();
        return view('conciliaciones.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conciliaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConciliacion $request)
    {
        Conciliacion::create($request->all());
        return redirect()->route('conciliacion.index')->with('success', 'Código de Conciliación creado exitosamente!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Conciliacion::find($id);
        return view('conciliaciones.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConciliacion $request, string $id)
    {
        $data = Conciliacion::find($id);
        $data->update($request->all());
        return redirect()->route('conciliacion.index')->with('success', 'Código de Conciliación actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Conciliacion::find($id);
        $data->delete();
        return redirect()->route('conciliacion.index')->with('success', 'Código de Conciliación eliminado exitosamente!');
    }
}
