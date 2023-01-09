<?php

namespace App\Http\Controllers;

use App\Models\JenisPerawatan;
use App\Models\Mobil;
use App\Models\Perawatan;
use Illuminate\Http\Request;

class PerawatanController extends Controller
{
    function index()
    {
        // get all perawatan
        $perawatans = Perawatan::all();
        return view('perawatan.index', compact('perawatans'));
    }

    function show(Perawatan $perawatan)
    {
        return view('perawatan.show', compact('perawatan'));
    }

    // method create
    function create()
    {
        $mobils = Mobil::all();
        $jenis_perawatans = JenisPerawatan::all();
        return view('perawatan.create', [
            'mobils' => $mobils,
            'jenis_perawatans' => $jenis_perawatans,
        ]);
    }

    // method store
    function store(Request $request)
    {
        // validate form 
        // dd($request->all());
        $this->validate($request, [
            'tanggal' => 'required',
            'biaya' => 'required',
            'deskripsi' => 'required',
            'mobil_id' => 'required',
            'jenis_perawatan' => 'required',
        ]);
        // create merk 
        Perawatan::create([
            'tanggal' => $request->tanggal,
            'biaya' => $request->biaya,
            'deskripsi' => $request->deskripsi,
            'mobil_id' => $request->mobil_id,
            'jenis_perawatan_id' => $request->jenis_perawatan
        ]);
        // redirect to index
        return redirect()->route('perawatans.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    function edit(Perawatan $perawatan)
    {
        $mobils = Mobil::all();
        $jenis_perawatans = JenisPerawatan::all();
        return view('perawatan.edit', [
            'mobils' => $mobils,
            'jenis_perawatans' => $jenis_perawatans,
            'perawatan' => $perawatan
        ]);
    }

    function update(Request $request, Perawatan $perawatan)
    {
        //validate form
        // dd($request->all());
        $this->validate($request, [
            'tanggal' => 'required',
            'biaya' => 'required',
            'deskripsi' => 'required',
            'mobil_id' => 'required',
            'jenis_perawatan_id' => 'required',
        ]);

        $perawatan->update([
            'tanggal' => $request->tanggal,
            'biaya' => $request->biaya,
            'deskripsi' => $request->deskripsi,
            'mobil_id' => $request->mobil_id,
            'jenis_perawatan_id' => $request->jenis_perawatan_id
        ]);

        return redirect()->route('perawatans.index')->with(['success' => 'Data Berhasil Diubah']);
    }

    //method delete
    function destroy(Perawatan $perawatan)
    {
        $perawatan->delete();
        // redirect to index 
        return redirect()->route('perawatans.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
