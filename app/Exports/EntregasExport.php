<?php

namespace App\Exports;

use App\Models\Entrega;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class EntregasExport implements FromView
{
    public $conciliacion;
    public $start;
    public $end;

    public function __construct($conciliacion, $start, $end)
    {
        $this->conciliacion = $conciliacion;
        $this->start = $start;
        $this->end = $end;
    }

    public function view(): View
    {
        return view('reportes.entregas', [
            'data' => Entrega::where('conciliacion', $this->conciliacion)
            ->whereBetween('created_at', [ $this->start, $this->end])
            ->get()
        ]);
    }
    
}
