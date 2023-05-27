<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'cc' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email:rfc,dns',
            'address' => 'required|string|max:255',
            'birthday' => 'required|date',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'cc.required' => 'El campo cédula es requerido',
            'name.required' => 'El campo nombre es requerido',
            'last_name.required' => 'El campo apellido es requerido',
            'phone.required' => 'El campo teléfono es requerido',
            'email.required' => 'El campo correo electrónico es requerido',
            'address.required' => 'El campo dirección es requerido',
            'birthday.required' => 'El campo fecha de nacimiento es requerido',
        ];
    }
}
