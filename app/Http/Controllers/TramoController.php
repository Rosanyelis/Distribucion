<?php

namespace App\Http\Controllers;

use App\Models\Tramo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTramo;
use App\Http\Requests\UpdateTramo;

class TramoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tramo::all();
        return view('tramos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tramos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTramo $request)
    {
        Tramo::create($request->all());
        return redirect()->route('tramo.index')->with('success', 'Tramo creado exitosamente!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Tramo::find($id);
        return view('tramos.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTramo $request, string $id)
    {
        $data = Tramo::find($id);
        $data->update($request->all());
        return redirect()->route('tramo.index')->with('success', 'Tramo actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Tramo::find($id);
        $data->delete();
        return redirect()->route('tramo.index')->with('success', 'Tramo eliminado exitosamente!');
    }
}
