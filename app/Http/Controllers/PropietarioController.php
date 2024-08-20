<?php

namespace App\Http\Controllers;

use App\Models\Files;
use App\Models\Propietario;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CuentaBancaria;
use App\Http\Requests\StorePropietarioRequest;
use App\Http\Requests\UpdatePropietarioRequest;

class PropietarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Propietario::all();
        return view('propietarios.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('propietarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropietarioRequest $request)
    {
        try {
            $propietario = Propietario::create([
                'name'              => $request->name,
                'cedula'            => $request->cedula,
                'nit'               => $request->nit,
                'fecha_nacimiento'  => $request->fecha_nacimiento,
                'name_ruat'         => $request->name_ruat,
                'ci_ruat'           => $request->ci_ruat,
            ]);

            if ($request->hasFile('url_file_cedula')) {
                $uploadPath = public_path('/storage/propietarios/');
                $file = $request->file('url_file_cedula');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('propietarios', $fileName, 'public'); // Utiliza storage()

                Files::create([
                    'propietario_id' => $propietario->id,
                    'name' => 'cedula',
                    'filename' => $fileName,
                    'type' => $extension,
                    'path' => $filePath
                ]);
            }


            if ($request->hasFile('url_file_nit')) {
                $uploadPath = public_path('/storage/propietarios/');
                $file = $request->file('url_file_nit');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('propietarios', $fileName, 'public'); // Utiliza storage()


                Files::create([
                    'propietario_id' => $propietario->id,
                    'name' => 'NIT',
                    'filename' => $fileName,
                    'type' => $extension,
                    'path' => $filePath
                ]);
            }

            if ($request->hasFile('url_file_ruat')) {
                $uploadPath = public_path('/storage/propietarios/');
                $file = $request->file('url_file_ruat');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('propietarios', $fileName, 'public'); // Utiliza storage()

                Files::create([
                    'propietario_id' => $propietario->id,
                    'name' => 'RUAT',
                    'filename' => $fileName,
                    'type' => $extension,
                    'path' => $filePath
                ]);
            }

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }


        return redirect()->route('propietario.index')->with('success', 'Propietario creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($propietario)
    {
        $data = Propietario::with('files')->find($propietario);
        return view('propietarios.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($propietario)
    {
        $data = Propietario::with('files')->find($propietario);
        return view('propietarios.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePropietarioRequest $request, $propietario)
    {
        try {

            $propietario = Propietario::find($propietario);
            $propietario->update([
                'name'              => $request->name,
                'cedula'            => $request->cedula,
                'nit'               => $request->nit,
                'fecha_nacimiento'  => $request->fecha_nacimiento,
                'name_ruat'         => $request->name_ruat,
                'ci_ruat'           => $request->ci_ruat,
            ]);


            if ($request->hasFile('url_file_cedula')) {
                $uploadPath = public_path('/storage/propietarios/');
                $file = $request->file('url_file_cedula');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('propietarios', $fileName, 'public'); // Utiliza storage()

                $propietario->files()->where('name', 'cedula')->update([
                    'filename' => $fileName,
                    'path' => $filePath
                ]);
            }

            if ($request->hasFile('url_file_nit')) {
                $uploadPath = public_path('/storage/propietarios/');
                $file = $request->file('url_file_nit');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('propietarios', $fileName, 'public'); // Utiliza storage()

                $propietario->files()->where('name', 'nit')->update([
                    'filename' => $fileName,
                    'path' => $filePath
                ]);
            }

            if ($request->hasFile('url_file_ruat')) {
                $uploadPath = public_path('/storage/propietarios/');
                $file = $request->file('url_file_ruat');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('propietarios', $fileName, 'public'); // Utiliza storage()

                $propietario->files()->where('name', 'RUAT')->update([
                    'filename' => $fileName,
                    'path' => $filePath
                ]);
            }


        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
        return redirect()->route('propietario.index')->with('success', 'Propietario actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($propietario)
    {
        $propietario = Propietario::find($propietario);
        $propietario->delete();
        return redirect()->route('propietario.index')->with('success', 'Propietario eliminado satisfactoriamente');
    }

    public function uploadFiles(Request $request, $propietario)
    {
        try {

            $propietario = Propietario::find($propietario);

            if ($request->hasFile('url_file')) {
                $uploadPath = public_path('/storage/propietarios/');
                $file = $request->file('url_file');
                $extension = $file->getClientOriginalExtension();
                $uuid = Str::uuid(4);
                $fileName = $uuid . '.' . $extension;
                $filePath = $file->storeAs('propietarios', $fileName, 'public'); // Utiliza storage()

                Files::create([
                    'propietario_id' => $propietario->id,
                    'name' => $request->name,
                    'filename' => $fileName,
                    'type' => $extension,
                    'path' => $filePath
                ]);
            }

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

        return redirect()->route('propietario.index')->with('success', 'Archivo subido satisfactoriamente');
    }

    public function addCuentaBancaria(Request $request, $propietario)
    {
        CuentaBancaria::create([
            'propietario_id' => $propietario,
            'banco' => $request->banco,
            'cuenta' => $request->cuenta
        ]);
        return redirect()->back()->with('success', 'Cuenta agregada satisfactoriamente');
    }

    public function deleteCuentaBancaria($id)
    {
        CuentaBancaria::find($id)->delete();
        return redirect()->back()->with('success', 'Cuenta eliminada satisfactoriamente');
    }
}
