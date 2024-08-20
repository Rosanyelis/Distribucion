<?php

namespace App\Http\Controllers;

use App\Models\Files;
use App\Models\Conductor;
use App\Models\Propietario;
use Illuminate\Support\Str;
use App\Models\SemiRemolque;
use App\Models\TractoCamion;
use Illuminate\Http\Request;
use App\Models\ConductorTractoCamion;
use App\Models\PropietarioTractoCamion;
use App\Http\Requests\StoreTractoCamion;

class TractoCamionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = TractoCamion::all();
        return view('tractocamions.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $propietarios = Propietario::all();
        $conductores = Conductor::all();
        return view('tractocamions.create', compact('propietarios', 'conductores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTractoCamion $request)
    {
        try {

            $tractoCamion = TractoCamion::create([
                'propietario_id' => $request->propietario_id,
                'conductor_id' => $request->conductor_id,
                'placa' => $request->placa,
                'chasis' => $request->chasis,
                'motor' => $request->motor,
                'anio' => $request->anio,
                'tipo_vehiculo' => $request->tipo_vehiculo,
                'color' => $request->color,
                'ejes' => $request->ejes,
                'marca' => $request->marca,
                'asientos' => $request->asientos,
                'capacidad_arrastre' => $request->capacidad_arrastre,
                'modelo' => $request->modelo,
                'cilindraje' => $request->cilindraje,
                'traccion' => $request->traccion,
                'fechai_seguro_cti' => $request->fechai_seguro_cti,
                'fechaf_seguro_cti' => $request->fechaf_seguro_cti,
            ]);

            if ($request->hasFile('url_file_seguro')) {
                $uploadPath = public_path('/storage/tractocamiones/');
                $file = $request->file('url_file_seguro');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('tractocamiones', $fileName, 'public'); // Utiliza storage()

                Files::create([
                    'tracto_camion_id' => $tractoCamion->id,
                    'name' => 'seguro cti',
                    'filename' => $fileName,
                    'type' => $extension,
                    'path' => $filePath
                ]);
            }

            $semiremolque = SemiRemolque::create([
                'tracto_camion_id' => $tractoCamion->id,
                'placa' => $request->placas,
                'chasis' => $request->chasiss,
                'serie' => $request->series,
                'anio' => $request->anios,
                'color' => $request->colors,
                'marca' => $request->marcas,
                'tipo_carroceria' => $request->tipo_carroceria,
                'ejes' => $request->ejess,
                'capacidad_total' => $request->capacidad_total,
                'capacidad_compartimiento1' => $request->capacidad_compartimiento1,
                'capacidad_compartimiento2' => $request->capacidad_compartimiento2,
                'fechai_tarjeta_operacion' => $request->fechai_tarjeta_operacion,
                'fechaf_tarjeta_operacion' => $request->fechaf_tarjeta_operacion,
            ]);


            if ($request->hasFile('url_file_tarjeta_operacion')) {
                $uploadPath = public_path('/storage/semiremolques/');
                $file = $request->file('url_file_tarjeta_operacion');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('semiremolques', $fileName, 'public'); // Utiliza storage()

                Files::create([
                    'semi_remolque_id' => $semiremolque->id,
                    'name' => 'tarjeta operacion',
                    'filename' => $fileName,
                    'type' => $extension,
                    'path' => $filePath
                ]);
            }

            PropietarioTractoCamion::create([
                'propietario_id' => $request->propietario_id,
                'tracto_camion_id' => $tractoCamion->id,
            ]);

            ConductorTractoCamion::create([
                'conductor_id' => $request->conductor_id,
                'tracto_camion_id' => $tractoCamion->id,
            ]);


        } catch (\Throwable $th) {

            return redirect()->route('tracto-camiones.index')->with('error', 'Error al crear Tracto Camion');
        }
            return redirect()->route('tracto-camiones.index')->with('success', 'Tracto Camion creado exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = TractoCamion::find($id);
        return view('tractocamions.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $propietarios = Propietario::all();
        $conductores = Conductor::all();
        $data = TractoCamion::find($id);
        return view('tractocamions.edit', compact('data', 'propietarios', 'conductores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {

            $tractoCamion = TractoCamion::find($id);

            if ($tractoCamion->propietario_id != $request->propietario_id) {
                PropietarioTractoCamion::create([
                    'propietario_id' => $request->propietario_id,
                    'tracto_camion_id' => $tractoCamion->id,
                ]);
            }

            if ($tractoCamion->conductor_id != $request->conductor_id) {
                ConductorTractoCamion::create([
                    'conductor_id' => $request->conductor_id,
                    'tracto_camion_id' => $tractoCamion->id,
                ]);
            }

            $tractoCamion->update([
                'propietario_id' => $request->propietario_id,
                'conductor_id' => $request->conductor_id,
                'placa' => $request->placa,
                'chasis' => $request->chasis,
                'motor' => $request->motor,
                'anio' => $request->anio,
                'tipo_vehiculo' => $request->tipo_vehiculo,
                'color' => $request->color,
                'ejes' => $request->ejes,
                'marca' => $request->marca,
                'asientos' => $request->asientos,
                'capacidad_arrastre' => $request->capacidad_arrastre,
                'modelo' => $request->modelo,
                'cilindraje' => $request->cilindraje,
                'traccion' => $request->traccion,
                'fechai_seguro_cti' => $request->fechai_seguro_cti,
                'fechaf_seguro_cti' => $request->fechaf_seguro_cti,
            ]);


            if ($request->hasFile('url_file_seguro')) {
                $uploadPath = public_path('/storage/tractocamiones/');
                $file = $request->file('url_file_seguro');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('tractocamiones', $fileName, 'public'); // Utiliza storage()

                $tractoCamion->files()->where('name', 'seguro cti')->update([
                    'filename' => $fileName,
                    'path' => $filePath
                ]);
            }

            $semiremolque = SemiRemolque::where('tracto_camion_id', $id)->first();
            $semiremolque->update([
                'tracto_camion_id' => $tractoCamion->id,
                'placa' => $request->placas,
                'chasis' => $request->chasiss,
                'serie' => $request->series,
                'anio' => $request->anios,
                'color' => $request->colors,
                'marca' => $request->marcas,
                'tipo_carroceria' => $request->tipo_carroceria,
                'ejes' => $request->ejess,
                'capacidad_total' => $request->capacidad_total,
                'capacidad_compartimiento1' => $request->capacidad_compartimiento1,
                'capacidad_compartimiento2' => $request->capacidad_compartimiento2,
                'fechai_tarjeta_operacion' => $request->fechai_tarjeta_operacion,
                'fechaf_tarjeta_operacion' => $request->fechaf_tarjeta_operacion,
            ]);


            if ($request->hasFile('url_file_tarjeta_operacion')) {
                $uploadPath = public_path('/storage/semiremolques/');
                $file = $request->file('url_file_tarjeta_operacion');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('semiremolques', $fileName, 'public'); // Utiliza storage()

                $semiremolque->files()->where('name', 'tarjeta operacion')->update([
                    'filename' => $fileName,
                    'path' => $filePath
                ]);
            }



        } catch (\Throwable $th) {
            return redirect()->route('tracto-camiones.index')->with('error', 'Error al actualizar Tracto Camion');
        }
            return redirect()->route('tracto-camiones.index')->with('success', 'Tracto Camion actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = TractoCamion::find($id);
        $data->delete();
        return redirect()->route('tracto-camiones.index')->with('success', 'Tracto Camion eliminado exitosamente!');
    }

    public function uploadFiles(Request $request, $tractocamion)
    {
        try {

            if ($request->type == 'tractocamion') {
                $tractocamion = TractoCamion::find($tractocamion);

                if ($request->hasFile('url_file')) {
                    $uploadPath = public_path('/storage/tractocamiones/');
                    $file = $request->file('url_file');
                    $extension = $file->getClientOriginalExtension();
                    $uuid = Str::uuid(4);
                    $fileName = $uuid . '.' . $extension;
                    $filePath = $file->storeAs('tractocamiones', $fileName, 'public'); // Utiliza storage()

                    Files::create([
                        'tracto_camion_id' => $tractocamion->id,
                        'name' => $request->name,
                        'filename' => $fileName,
                        'type' => $extension,
                        'path' => $filePath
                    ]);
                }
            }

            if ($request->type == 'semiremolque') {

                $tractocamion = TractoCamion::find($tractocamion);

                if ($request->hasFile('url_file')) {
                    $uploadPath = public_path('/storage/semiremolques/');
                    $file = $request->file('url_file');
                    $extension = $file->getClientOriginalExtension();
                    $uuid = Str::uuid(4);
                    $fileName = $uuid . '.' . $extension;
                    $filePath = $file->storeAs('semiremolques', $fileName, 'public'); // Utiliza storage()

                    Files::create([
                        'semi_remolque_id' => $tractocamion->semiRemolque->id,
                        'name' => $request->name,
                        'filename' => $fileName,
                        'type' => $extension,
                        'path' => $filePath
                    ]);
                }

            }


        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

        return redirect()->route('tracto-camiones.index')->with('success', 'Archivo subido satisfactoriamente');
    }

}
