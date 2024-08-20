<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUser extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'password' => ['nullable', 'string', 'min:8'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "El Usuario es obligatorio.",
            'name.string' => "El Usuario debe de ser un texto.",
            'phone.required' => "El Telefono es obligatorio.",
            'email.required' => "El Email es obligatorio.",
            'email.email' => "El Email no tiene formato válido.",
            'email.unique' => "El Email ya se encuentra registrado.",
            'password.string' => "La Password debe ser un texto entre minusculas y mayusculas.",
            'password.min' => "La Password debe tener al menos 8 caracteres."
        ];
    }
}
