<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class MerkController extends Controller
{
    function index()
    {
        // get post 
        $merks = Merk::latest()->paginate(5);
        //render view with mreks
        return view('merk.index', compact('merks'));
    }

    // method create
    function create()
    {
        return view('merk.create');
    }

    // method store
    function store(Request $request)
    {
        // validate form 
        $this->validate($request, [
            'nama' => 'required|min:2',
            'produk' => 'required|min:3'
        ]);
        // create merk 
        Merk::create([
            'nama' => $request->nama,
            'produk' => $request->produk
        ]);
        // redirect to index
        return redirect()->route('merks.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    function edit(Merk $merk)
    {
        return view('merk.edit', compact('merk'));
    }

    function update(Request $request, Merk $merk)
    {
        //validate form
        $this->validate($request, [
            'nama' => 'required|min:2',
            'produk' => 'required|min:3'
        ]);

        $merk->update([
            'nama' => $request->nama,
            'produk' => $request->produk
        ]);
        //redirect to index
        return redirect()->route('merks.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    function destroy(Merk $merk)
    {
        //delete merk
        $merk->delete();
        // redirect to index 
        return redirect()->route('merks.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
