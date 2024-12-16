<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Entrega;
use App\Models\Conciliacion;
use Illuminate\Http\Request;
use App\Exports\EntregasExport;
use Maatwebsite\Excel\Facades\Excel;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $conciliaciones = Conciliacion::all();
        return view('reportes.index', compact('conciliaciones'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function generar(Request $request)
    {
        return Excel::download(new EntregasExport($request->conciliacion, $request->start, $request->end),
            'Planilla - ' . Carbon::now(). '.xlsx');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
