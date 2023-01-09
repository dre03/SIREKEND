<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use App\Models\Merk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MobilController extends Controller
{
    function __construct()
    {
        $mobils = new Mobil();
    }

    function index()
    {
        // get mobils
        $mobils = Mobil::all();
        // $mobils = [
        //     'data' => $this->Mobil->allData()
        // ];
        //mengembalikan nilai
        return view('mobil.index', compact('mobils'));
    }
    function show(Mobil $mobil)
    {
        return view('mobil.show', compact('mobil'));
    }

    // method create
    function create()
    {
        $merks = Merk::all();
        return view('mobil.create', compact('merks'));
    }

    // method store
    function store(Request $request)
    {
        // validate form 
        $this->validate($request, [
            'nopol' => 'required|min:2',
            'warna' => 'required|min:3',
            'harga_sewa' => 'required',
            'deskripsi' => 'required|min:5',
            'cc' => 'required',
            'km_mobil' => 'required',
            'tahun' => 'required',
            'merk_id' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        //upload image
        $foto = $request->file('foto');
        $foto->storeAs('public/mobils', $foto->hashName());

        // create merk 
        Mobil::create([
            'nopol' => $request->nopol,
            'warna' => $request->warna,
            'harga_sewa' => $request->harga_sewa,
            'deskripsi' => $request->deskripsi,
            'cc' => $request->cc,
            'km_mobil' => $request->km_mobil,
            'tahun' => $request->tahun,
            'merk_id' => $request->merk_id,
            'foto' => $foto->hashName()
        ]);
        // redirect to index
        return redirect()->route('mobils.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    function edit(Mobil $mobil)
    {
        $merks = Merk::all();
        return view('mobil.edit', [
            'merks' => $merks,
            'mobil' => $mobil
        ]);
    }

    function update(Request $request, Mobil $mobil)
    {
        // validate form 
        $this->validate($request, [
            'nopol' => 'required|min:2',
            'warna' => 'required|min:3',
            'harga_sewa' => 'required',
            'deskripsi' => 'required|min:5',
            'cc' => 'required',
            'km_mobil' => 'required',
            'tahun' => 'required',
            'merk_id' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);
        //check if image is uploaded
        if ($request->hasFile('foto')) {
            //upload new foto
            $foto = $request->file('foto');
            $foto->storeAs('public/mobils', $foto->hashName());
            //delete old foto
            Storage::delete('public/mobils/' . $mobil->foto);

            // update mobil with new foto 
            $mobil->update([
                'nopol' => $request->nopol,
                'warna' => $request->warna,
                'harga_sewa' => $request->harga_sewa,
                'deskripsi' => $request->deskripsi,
                'cc' => $request->cc,
                'km_mobil' => $request->km_mobil,
                'tahun' => $request->tahun,
                'merk_id' => $request->merk_id,
                'foto' => $foto->hashName()
            ]);
        } else {
            //update post without image
            $mobil->update([
                'nopol' => $request->nopol,
                'warna' => $request->warna,
                'harga_sewa' => $request->harga_sewa,
                'deskripsi' => $request->deskripsi,
                'cc' => $request->cc,
                'km_mobil' => $request->km_mobil,
                'tahun' => $request->tahun,
                'merk_id' => $request->merk_id
            ]);
        }
        // redirect to index
        return redirect()->route('mobils.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    function destroy(Mobil $mobil)
    {
        //delete merk
        $mobil->delete();
        // redirect to index 
        return redirect()->route('mobils.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
