<?php

namespace App\Http\Controllers;

use App\Models\Files;
use App\Models\Conductor;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConductorRequest;
use App\Http\Requests\UpdateConductorRequest;

class ConductorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Conductor::all();
        return view('conductores.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('conductores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConductorRequest $request)
    {
        try {

            $conductor = Conductor::create([
                'name'          => $request->name,
                'cedula'        => $request->cedula,
                'licencia'      => $request->licencia,
                'fecha_ingreso' => $request->fecha_ingreso,
                'fecha_salida'  => $request->fecha_salida,
            ]);

            if ($request->hasFile('url_file_cedula')) {
                $uploadPath = public_path('/storage/conductores/');
                $file = $request->file('url_file_cedula');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('conductores', $fileName, 'public'); // Utiliza storage()

                Files::create([
                    'conductor_id' => $conductor->id,
                    'name' => 'cedula',
                    'filename' => $fileName,
                    'type' => $extension,
                    'path' => $filePath
                ]);
            }

            if ($request->hasFile('url_file_licencia')) {
                $uploadPath = public_path('/storage/conductores/');
                $file = $request->file('url_file_licencia');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('conductores', $fileName, 'public'); // Utiliza storage()

                Files::create([
                    'conductor_id' => $conductor->id,
                    'name' => 'licencia',
                    'filename' => $fileName,
                    'type' => $extension,
                    'path' => $filePath
                ]);
            }


        } catch (\Exception $e) {
            return redirect()->route('conductor.index')->with('error', $e->getMessage());
        }

        return redirect()->route('conductor.index')->with('success', 'Conductor creado exitosamente!');
    }

    /**
     * Display the specified resource.
     */
    public function show($conductor)
    {
        $data = Conductor::find($conductor);
        return view('conductores.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($conductor)
    {
        $data = Conductor::find($conductor);
        return view('conductores.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConductorRequest $request, $conductor)
    {
        try {

            $conductor = Conductor::find($conductor);
            $conductor->update([
                'name'          => $request->name,
                'cedula'        => $request->cedula,
                'licencia'      => $request->licencia,
                'fecha_salida'  => $request->fecha_salida,
            ]);

            if ($request->hasFile('url_file_cedula')) {
                $uploadPath = public_path('/storage/conductores/');
                $file = $request->file('url_file_cedula');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('conductores', $fileName, 'public'); // Utiliza storage()


                $conductor->files()->where('name', 'cedula')->update([
                    'filename' => $fileName,
                    'path' => $filePath
                ]);
            }


            if ($request->hasFile('url_file_licencia')) {
                $uploadPath = public_path('/storage/conductores/');
                $file = $request->file('url_file_licencia');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('conductores', $fileName, 'public'); // Utiliza storage()

                $conductor->files()->where('name', 'licencia')->update([
                    'filename' => $fileName,
                    'path' => $filePath
                ]);
            }

        } catch (\Exception $e) {
            return redirect()->route('conductor.index')->with('error', $e->getMessage());
        }

        return redirect()->route('conductor.index')->with('success', 'Conductor actualizado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($conductor)
    {
        $data = Conductor::find($conductor);
        $data->delete();
        return redirect()->route('conductor.index')->with('success', 'Conductor eliminado exitosamente!');
    }

    public function uploadFiles(Request $request, $conductor)
    {
        try {

            $conductor = Conductor::find($conductor);

            if ($request->hasFile('url_file')) {
                $uploadPath = public_path('/storage/conductores/');
                $file = $request->file('url_file');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('conductores', $fileName, 'public'); // Utiliza storage()

                Files::create([
                    'conductor_id' => $conductor->id,
                    'name' => $request->name,
                    'filename' => $fileName,
                    'type' => $extension,
                    'path' => $filePath
                ]);
            }

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

        return redirect()->back()->with('success', 'Archivo subido satisfactoriamente');
    }
}
