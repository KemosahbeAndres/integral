<?php

namespace App\Http\Controllers;

use Core\Infrastructure\Session\LaravelSessionAdapter;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function login(Request $request)
    {
        if(LaravelSessionAdapter::login($request)){
            return redirect()->intended('app.home');
        }
        $message = 'Error';
        return redirect()->route('page.login', ["error" => $message]);
    }
    public function logout(Request $request)
    {
        LaravelSessionAdapter::logout($request);
    }
}
