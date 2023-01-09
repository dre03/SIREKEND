<?php

namespace App\Http\Controllers;

use App\Models\JenisPerawatan;
use Illuminate\Http\Request;

class JenisPerawatanController extends Controller
{
    function index()
    {
        $jns_perawatans = JenisPerawatan::all();
        return view('jns-perawatan.index', compact('jns_perawatans'));
    }

    function store(Request $request)
    {
        // validate form 
        $this->validate($request, [
            'nama' => 'required|min:2'
        ]);
        // create jns_perawatan 
        JenisPerawatan::create([
            'nama' => $request->nama
        ]);
        // redirect to index
        return redirect()->route('jns-perawatans.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    function edit(JenisPerawatan $jns_perawatan)
    {
        return view('jns-perawatan.index', compact('jns_perawatan'));
    }

    function update(Request $request, JenisPerawatan $jns_perawatan)
    {
        //validate form
        $this->validate($request, [
            'nama' => 'required|min:2'
        ]);

        $jns_perawatan->update([
            'nama' => $request->nama
        ]);
        //redirect to index
        return redirect()->route('jns-perawatans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    function destroy(JenisPerawatan $jns_perawatan)
    {
        //delete jns_perawatan
        $jns_perawatan->delete();
        // redirect to index 
        return redirect()->route('jns-perawatans.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
