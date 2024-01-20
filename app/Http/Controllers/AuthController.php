<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginRequest $request): array
    {
        if (Auth::attemptWhen($request->toArray())) {
            $request->session()->regenerate();

            return ['You have successfully logged in'];
        }

        return [
            'email' => 'The provided credentials do not match our records.',
        ];
    }

    public function register(RegistrationRequest $request): void
    {
        $user = User::query()->create([
            'email' => $request->get('email'),
            'username' => $request->get('username'),
            'password' => Hash::make($request->get('password')),
        ]);

        event(new Registered($user));

        Auth::login($user);
    }
}
