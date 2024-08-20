<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'email', 'unique:'.User::class],
            'password' => ['required', 'string'],
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
            'password.required' => "La Password es obligatorio.",

        ];
    }
}
