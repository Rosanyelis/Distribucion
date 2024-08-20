<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehiculoRequest extends FormRequest
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
            'code_propietario' => 'required',
            'name' => 'required',
            'cedula' => 'required',
            'nit' => 'required',
            'placa' => 'required',
            'color' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'anio' => 'required',
            'chasis' => 'required',
            'motor' => 'required',
            'ejes' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'code_propietario.required' => 'El campo Código de Propietario es requerido',
            'name.required' => 'El campo Nombre Completo del Propietario es requerido',
            'cedula.required' => 'El campo Cedula es requerido',
            'nit.required' => 'El campo NIT es requerido',
            'placa.required' => 'El campo Placa es requerido',
            'color.required' => 'El campo Color es requerido',
            'marca.required' => 'El campo Marca es requerido',
            'modelo.required' => 'El campo Modelo es requerido',
            'anio.required' => 'El campo Año es requerido',
            'chasis.required' => 'El campo Número de chasis es requerido',
            'motor.required' => 'El campo Número de motor es requerido',
            'ejes.required' => 'El campo Número de Ejes es requerido',
        ];
    }
}
