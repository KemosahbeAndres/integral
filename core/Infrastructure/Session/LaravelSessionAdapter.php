<?php

namespace Core\Infrastructure\Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Core\Domain\User\Contracts\ISessionAdapter;

final class LaravelSessionAdapter implements ISessionAdapter
{
    public static function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'username'],
            'password' => ['required']
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return true;
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
    public static function get_logged_user(): array
    {
        return User::find(Auth::id());
    }
}
