<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateConductorRequest extends FormRequest
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
            'name' => 'required',
            'cedula' => 'required',
            'licencia' => 'required',
            'url_file_cedula'   => ['mimes:pdf', 'max:2048'],
            'url_file_licencia' => ['mimes:pdf', 'max:2048'],
            'fecha_ingreso' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El campo Nombre Completo es requerido',
            'cedula.required' => 'El campo Cedula es requerido',
            'licencia.required' => 'El campo Licencia es requerido',
            'url_file_cedula.mimes' => 'El archivo debe ser un pdf',
            'url_file_licencia.mimes' => 'El archivo debe ser un pdf',
            'fecha_ingreso.required' => 'El campo Fecha de Ingreso es requerido',
        ];
    }
}
