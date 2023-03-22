<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;


class AuthenticationController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/scheduled-appointments');
        }

        return redirect()->back()
            ->withInput($credentials)
            ->withErrors(['email' => 'These credentials do not match our records.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
