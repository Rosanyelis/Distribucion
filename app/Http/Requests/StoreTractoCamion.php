<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTractoCamion extends FormRequest
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
            'propietario_id'            => ['required', 'exists:propietarios,id'],
            'conductor_id'              => ['required', 'exists:conductors,id'],

            'placa'                     => ['required'],
            'chasis'                    => ['required'],
            'motor'                     => ['required'],
            'anio'                      => ['required'],
            'tipo_vehiculo'             => ['required'],
            'color'                     => ['required'],
            'ejes'                      => ['required'],
            'marca'                     => ['required'],
            'asientos'                  => ['required'],
            'capacidad_arrastre'        => ['required'],
            'modelo'                    => ['required'],
            'cilindraje'                => ['required'],
            'traccion'                  => ['required'],
            'fechai_seguro_cti'         => ['required'],
            'fechaf_seguro_cti'         => ['required'],

            'placas'                     => ['required'],
            'chasiss'                    => ['required'],
            'series'                     => ['required'],
            'anios'                      => ['required'],
            'colors'                     => ['required'],
            'marcas'                     => ['required'],
            'tipo_carroceria'            => ['required'],
            'ejess'                      => ['required'],
            'capacidad_total'            => ['required'],
            'capacidad_compartimiento1'  => ['required'],
            'capacidad_compartimiento2'  => ['required'],
            'fechai_tarjeta_operacion'   => ['required'],
            'fechaf_tarjeta_operacion'   => ['required'],

        ];
    }

    public function messages(): array
    {
        return [
            'propietario_id.required'   => 'El campo Propietario es requerido',
            'conductor_id.required'     => 'El campo Conductor es requerido',

            'placa.required'            => 'El campo Placa es requerido',
            'chasis.required'           => 'El campo Chasis es requerido',
            'motor.required'            => 'El campo Motor es requerido',
            'anio.required'             => 'El campo Año es requerido',
            'tipo_vehiculo.required'    => 'El campo Tipo de Vehiculo es requerido',
            'color.required'            => 'El campo Color es requerido',
            'ejes.required'             => 'El campo Ejes es requerido',
            'marca.required'             => 'El campo Marca es requerido',
            'cilindraje.required'       => 'El campo Cilindraje es requerido',
            'asientos.required'         => 'El campo Asientos es requerido',
            'capacidad_arrastre.required'  => 'El campo Capacidad de Arrastre es requerido',
            'modelo.required'           => 'El campo Modelo es requerido',
            'cilindraje.required'       => 'El campo Cilindraje es requerido',
            'traccion.required'         => 'El campo Traccion es requerido',
            'fechai_seguro_cti.required' => 'El campo Fecha de inicio de seguro CTI es requerido',
            'fechaf_seguro_cti.required' => 'El campo Fecha de final de seguro CTI es requerido',

            'placas.required'            => 'El campo Placa es requerido',
            'chasiss.required'           => 'El campo Chasis es requerido',
            'series.required'            => 'El campo Serie es requerido',
            'anios.required'             => 'El campo Anio es requerido',
            'colors.required'            => 'El campo Color es requerido',
            'marcas.required'            => 'El campo Marca es requerido',
            'tipo_carroceria.required'   => 'El campo Tipo de Carroceria es requerido',
            'ejess.required'             => 'El campo Ejes es requerido',
            'capacidad_total.required'   => 'El campo Capacidad Total es requerido',
            'capacidad_compartimiento1.required' => 'El campo Capacidad Compartimiento 1 es requerido',
            'capacidad_compartimiento2.required' => 'El campo Capacidad Compartimiento 2 es requerido',
            'fechai_tarjeta_operacion.required' => 'El campo Fecha de inicio de tarjeta de operacion es requerido',
            'fechaf_tarjeta_operacion.required' => 'El campo Fecha de final de tarjeta de operacion es requerido',

        ];
    }
}
