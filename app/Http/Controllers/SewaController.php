<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Sewa;
use App\Models\User;
use Illuminate\Http\Request;

class SewaController extends Controller
{
    function index()
    {
        //get all data 
        $mobils = Mobil::all();
        $users = User::all();
        $sewas = Sewa::all();
        return view('sewa.index', [
            'mobils' => $mobils,
            'users' => $users,
            'sewas' => $sewas,
        ]);
    }

    function show(Sewa $sewa)
    {
        return view('sewa.index', compact($sewa));
    }

    function destroy($id)
    {
        $sewa = Sewa::find($id);
        $sewa->delete();
        // redirect ke index
        return redirect('/sewas')->with(['success', 'Data Berhasil Disimpan']);
    }

    function create()
    {
        $mobils = Mobil::all();
        $users = User::all();
        $sewas = Sewa::all();
        return view('frontend.homepage', [
            'mobils' => $mobils,
            'users' => $users,
            'sewas' => $sewas,
        ]);
    }

    function store(Request $request)
    {

        // dd("tes");
        //form validate
        $this->validate($request, [
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'tujuan' => 'required',
            'noktp' => 'required',
            'user_id' => 'required',
            'mobil_id' => 'required',

        ]);

        Sewa::create([
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'tujuan' => $request->tujuan,
            'noktp' => $request->noktp,
            'user_id' => $request->user_id,
            'mobil_id' => $request->mobil_id
        ]);
        return redirect('/');
    }
}
