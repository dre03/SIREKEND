<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrasiController extends Controller
{
    function index()
    {
        return view('register.index');
    }

    function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:255',
            'username' => 'required|min:3',
            'email' => 'required|email:dns',
            'password' => 'required|min:5',

        ]);

        // $validateData['password'] = bcrypt($validateData['password']);
        $validateData['password'] = Hash::make($validateData['password']);
        $validateData['role'] = 'user';


        User::create($validateData);

        return redirect('/login')->with('success', 'Registrasi Berhasil, Silahkan Login');
    }
}
