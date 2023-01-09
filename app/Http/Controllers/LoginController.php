<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function index()
    {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        // dd($request->all());
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->role == 'admin') {
                return redirect()->intended('/dashboard');
            }
            return redirect()->intended('/');
        }

        // $user = User::where('email', $request->email)->first();
        // if (Hash::check($request->password, $user->password)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/dashboard');
        // }

        return back()->with('loginError', 'Login Gagal');
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
