<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest
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
            'name'                  => ['required'],
            'tolerance_percentage'  => ['required'],
            'adminisible'           => ['required'],
            'price'                 => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required'                 => 'El campo Combustible es obligatorio',
            'tolerance_percentage.required' => 'El campo Porcentaje de Tolerancia es obligatorio',
            'adminisible.required'          => 'El campo Adminisible es obligatorio',
            'price.required'                => 'El campo Precio es obligatorio',
        ];
    }
}
