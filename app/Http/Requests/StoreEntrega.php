<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntrega extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'conciliacion'              => ['required'],
            'numeracion_conciliacion'   => ['required'],
            'mes'                       => ['required'],
            'propietario_id'            => ['required', 'exists:propietarios,id'],
            'tramo_id'                  => ['required', 'exists:tramos,id'],
            'tracto_camion_id'          => ['required', 'exists:tracto_camions,id'],
            'product_id'                => ['required', 'exists:products,id'],
            'tolerance_percentage'      => ['required'],
            'fecha_carga'               => ['required'],
            'carguio'                   => ['required'],
            'fecha_llegada'             => ['required'],
            'volumen_descarguio'        => ['required'],
            'merma'                     => ['required'],
            'cobros_merma'              => ['required'],
            'merma_permisible'          => ['required'],
            'merma_limite_excedible'    => ['required'],
            'merma_cobrable'            => ['required'],
            'precio_merma'              => ['required'],
            'merma_por_cobrar'          => ['required'],
            'flete'                     => ['required'],
            'liquido_basico'            => ['required'],
            'derecho_empresa_porcentaje' => ['required'],
            'derecho_empresa'           => ['required'],
            'liquido_facturado'         => ['required'],
            'retenciones'               => ['required'],
            'liquido_pagable'           => ['required'],
            'total_anticipos'           => ['required'],
            'total'                     => ['required'],
            'total_deuda'               => ['required'],
            'factura_n'                 => ['required'],
            'fecha'                     => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            '*.required'              => 'El campo es obligatorio',
        ];
    }
}
