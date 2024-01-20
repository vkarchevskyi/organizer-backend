<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
     * Password should have at least one number and one letter
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'min:5', 'max:255', 'email:strict', 'unique:users'],
            'username' => ['required', 'min:4', 'max:255', 'regex:/^[a-zA-Z0-9]*$/', 'unique:users'],
            'password' => [
                'required',
                'min:6',
                'max:36',
                'confirmed',
                'regex:/^(?=.*[a-zA-Z])(?=.*\d).+$/'
            ],
        ];
    }
}
