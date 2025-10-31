<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\View\View;

class AuthController extends Controller
{
    public function index(): View
    {
        if (session('errors')) {
            dump(session('errors')->all());
        }

        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        dd($request->validated());
    }

    public function logout(): void
    {
        // regenerate session
    }
}
