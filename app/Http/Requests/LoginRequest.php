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
            'email.required'              => 'A email is required',
            'email.email'                 => 'A emails is a email?',
            'email.max:70'                => 'The email not more than 70',
            'validation.password.mixed'   => 'The password is required',
            'validation.password.numbers' => 'The password not more than 70',
            // 'password.max:20'   => 'The password not more than 70',
        ];
    }
}
