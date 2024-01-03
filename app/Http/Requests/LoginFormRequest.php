<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
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
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:15'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Email Harus Diisi',
            'password.required' => 'Password Harus Diisi',
            'password.min' => 'Password Minimal 8 Karakter',
            'password.max' => 'Password Maksimal 15 Karakter'
        ];
    }
}
