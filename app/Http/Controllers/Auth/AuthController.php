<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(): View
    {
        if (session('errors')) {
            // dump(session('errors')->all());
        }

        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $request->validated();

        $user = User::where('email', $request->username)
            ->get();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $this->login($user);

                return redirect()->route('home');
            } else {
                return 'invalid login!';
            }
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors('login_error', 'invalid login!');
        }

    }

    private function login(User $user)
    {
        // update last login and resets other fields
        $user->last_login = now();
        $user->code = null;
        $user->code_expiration = null;
        $user->blocked_unitl = null;
        $user->save();
        // place user in session
        Auth::login($user);
    }

    public function logout(): void
    {
        // regenerate session
    }
}
