<?php

namespace Core\Infrastructure\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

final class LaravelSessionAdapter
{
    public static function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'username'],
            'password' => ['required']
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }
    public static function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
