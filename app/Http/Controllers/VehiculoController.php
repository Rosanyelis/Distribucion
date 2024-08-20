<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\Propietario;
use Illuminate\Support\Str;
use App\Http\Requests\StoreVehiculoRequest;
use App\Http\Requests\UpdateVehiculoRequest;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TractoCamion::with('propietarios')
                            ->get();
        return view('vehiculos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVehiculoRequest $request)
    {
        $fileCedula = '';
        if ($request->hasFile('url_file_cedula')) {
            $uploadPath = public_path('/storage/propietarios/');
            $file = $request->file('url_file_cedula');
            $extension = $file->getClientOriginalExtension();
            $uuid = Str::uuid(4);
            $fileName = $uuid . '.' . $extension;
            $file->move($uploadPath, $fileName);
            $url = '/storage/propietarios/'.$fileName;
            $fileCedula = $url;
        }

        $fileNit = '';
        if ($request->hasFile('url_file_nit')) {
            $uploadPath = public_path('/storage/propietarios/');
            $file = $request->file('url_file_nit');
            $extension = $file->getClientOriginalExtension();
            $uuid = Str::uuid(4);
            $fileName = $uuid . '.' . $extension;
            $file->move($uploadPath, $fileName);
            $url = '/storage/propietarios/'.$fileName;
            $fileNit = $url;
        }

        $vehiculo = Vehiculo::create([
            'placa' => $request->placa,
            'color' => $request->color,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'tipo_vehiculo' => $request->tipo_vehiculo,
            'modelo' => $request->modelo,
            'anio' => $request->anio,
            'chasis' => $request->chasis,
            'motor' => $request->motor,
            'ejes' => $request->ejes,
            'serie' => $request->serie,
            'cilindraje' => $request->cilindraje,
            'asientos' => $request->asientos,
            'capacidad_arrastre' => $request->capacidad_arrastre,
            'traccion' => $request->traccion,
            'tipo_carroceria' => $request->tipo_carroceria,
            'capacidad_total' => $request->capacidad_total,
            'capacidad_compartimiento1' => $request->capacidad_compartimiento1,
            'capacidad_compartimiento2' => $request->capacidad_compartimiento2,
        ]);

        Propietario::create([
            'vehiculo_id' => $vehiculo->id,
            'code_propietario' => $request->code_propietario,
            'name' => $request->name,
            'cedula' => $request->cedula,
            'url_file_cedula' => $fileCedula,
            'nit' => $request->nit,
            'url_file_nit' => $fileNit,
        ]);

        return redirect()->route('vehiculo.index')->with('success', 'Vehiculo creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($vehiculo)
    {
        $data = Vehiculo::find($vehiculo);
        return view('vehiculos.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($vehiculo)
    {
        $data = Vehiculo::find($vehiculo);
        return view('vehiculos.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehiculoRequest $request, $vehiculo)
    {
        $fileCedula = '';
        if ($request->hasFile('url_file_cedula')) {
            $uploadPath = public_path('/storage/propietarios/');
            $file = $request->file('url_file_cedula');
            $extension = $file->getClientOriginalExtension();
            $uuid = Str::uuid(4);
            $fileName = $uuid . '.' . $extension;
            $file->move($uploadPath, $fileName);
            $url = '/storage/propietarios/'.$fileName;
            $fileCedula = $url;
        }

        $fileNit = '';
        if ($request->hasFile('url_file_nit')) {
            $uploadPath = public_path('/storage/propietarios/');
            $file = $request->file('url_file_nit');
            $extension = $file->getClientOriginalExtension();
            $uuid = Str::uuid(4);
            $fileName = $uuid . '.' . $extension;
            $file->move($uploadPath, $fileName);
            $url = '/storage/propietarios/'.$fileName;
            $fileNit = $url;
        }


        $vehiculo = Vehiculo::find($vehiculo);
        $vehiculo->update([
            'placa' => $request->placa,
            'color' => $request->color,
            'marca' => $request->marca,
            'modelo' => $request->modelo,
            'tipo_vehiculo' => $request->tipo_vehiculo,
            'anio' => $request->anio,
            'chasis' => $request->chasis,
            'motor' => $request->motor,
            'ejes' => $request->ejes,
            'serie' => $request->serie,
            'cilindraje' => $request->cilindraje,
            'asientos' => $request->asientos,
            'capacidad_arrastre' => $request->capacidad_arrastre,
            'traccion' => $request->traccion,
            'tipo_carroceria' => $request->tipo_carroceria,
            'capacidad_total' => $request->capacidad_total,
            'capacidad_compartimiento1' => $request->capacidad_compartimiento1,
            'capacidad_compartimiento2' => $request->capacidad_compartimiento2,
        ]);

        if ($fileCedula == '') {
            $fileCedula = $vehiculo->propietario->url_file_cedula;
        }

        if ($fileNit == '') {
            $fileNit = $vehiculo->propietario->url_file_cedula;
        }

        Propietario::where('vehiculo_id', $vehiculo->id)->update([
            'code_propietario' => $request->code_propietario,
            'name' => $request->name,
            'cedula' => $request->cedula,
            'url_file_cedula' => $fileCedula,
            'nit' => $request->nit,
            'url_file_nit' => $fileNit,
        ]);

        return redirect()->route('vehiculo.index')->with('success', 'Vehiculo actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($vehiculo)
    {
        $vehiculo = Vehiculo::find($vehiculo);
        $vehiculo->delete();
        Propietario::where('vehiculo_id', $vehiculo->id)->delete();

        return redirect()->route('vehiculo.index')->with('success', 'Vehiculo eliminado exitosamente');
    }
}
