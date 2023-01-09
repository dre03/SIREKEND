<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    function index()
    {
        $mobils = Mobil::all();
        return view('frontend.homepage', compact('mobils'));
    }

    function show($id)
    {
        $mobil = Mobil::find($id);
        return view('frontend.show', compact('mobil'));
    }
}
