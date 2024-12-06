<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StoreLocations;

class StoreLocationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $storeLocations = StoreLocations::all();
        return view('admin.store_locations.index', compact('storeLocations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.store_locations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kota' => 'required|max:255|unique:store_locations,nama_kota',
            'nama_toko' => 'required|max:255|unique:store_locations,nama_toko',
        ], [
            'nama_kota.required' => 'Nama kota wajib diisi.',
            'nama_kota.max' => 'Nama kota tidak boleh lebih dari 255 karakter.',
            'nama_kota.unique' => 'Nama kota sudah digunakan, silahkan gunakan nama lain.',
            'nama_toko.required' => 'Nama toko wajib diisi.',
            'nama_toko.max' => 'Nama toko tidak boleh lebih dari 255 karakter.',
            'nama_toko.unique' => 'Nama toko sudah digunakan, silahkan gunakan nama lain.',
        ]);

        StoreLocations::create($request->all());
        return redirect()->route('store_locations')->with('success', 'Store location Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $storeLocation = StoreLocations::find($id);
        return view('admin.store_locations.edit', compact('storeLocation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kota' => 'required|max:255|unique:store_locations,nama_kota',
            'nama_toko' => 'required|max:255|unique:store_locations,nama_toko',
        ], [
            'nama_kota.required' => 'Nama kota wajib diisi.',
            'nama_kota.max' => 'Nama kota tidak boleh lebih dari 255 karakter.',
            'nama_kota.unique' => 'Nama kota sudah digunakan, silahkan gunakan nama lain.',
            'nama_toko.required' => 'Nama toko wajib diisi.',
            'nama_toko.max' => 'Nama toko tidak boleh lebih dari 255 karakter.',
            'nama_toko.unique' => 'Nama toko sudah digunakan, silahkan gunakan nama lain.',
        ]);

        $storeLocation = StoreLocations::find($id);
        $storeLocation->update($request->all());

        return redirect()->route('store_locations')->with('success', 'Store location Berhasil Diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $storeLocation = StoreLocations::find($id);
        $storeLocation->delete();

        return redirect()->route('store_locations')->with('success', 'Store location Berhasil Dihapus.');
    }
}
