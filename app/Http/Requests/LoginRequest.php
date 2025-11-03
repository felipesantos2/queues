<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email'    => 'email|required|max:16',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()],
        ];
    }

    public function messages(): array
    {
        return [
            'email.required'    => 'A email is required',
            'email.email'       => 'A emails is a email?',
            'email.max:70'      => 'The email not more than 70',
            'password.min'      => 'The password is too short! ',
            'password.required' => 'The password is required',
            // 'validation.password.mixed'   => 'The password is required',
            // 'validation.password.numbers' => 'The password not more than 70',
        ];
    }
}
