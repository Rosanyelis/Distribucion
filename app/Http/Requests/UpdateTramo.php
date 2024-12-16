<?php

namespace App\Http\Requests;

use App\Models\Tramo;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTramo extends FormRequest
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
            'name' => ['required', 'unique:tramos,name', Rule::unique(Tramo::class)->ignore($this->user()->id) ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Tramo es requerido.',
            'name.unique' => 'El tramo ya existe.',

        ];
    }
}
