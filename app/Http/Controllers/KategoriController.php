<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategoris,nama_kategori'
        ], [
            'nama_kategori.required' => 'Nama Kategori Harus Diisi',
            'nama_kategori.unique' => 'Nama Kategori Sudah Ada, Silahkan Gunakan Nama Lain'
        ]);

        Kategori::create($request->all());
        return redirect()->route('kategori')->with('success', 'Kategori Berhasil Ditambah');
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
        $kategori = Kategori::findOrFail($id);
        return view('admin.kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategoris,nama_kategori'
        ], [
            'nama_kategori.required' => 'Nama Kategori Harus Diisi',
            'nama_kategori.unique' => 'Nama Kategori Sudah Ada, Silahkan Gunakan Nama Lain'
        ]);

        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());
        return redirect()->route('kategori')->with('success', 'Kategori Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $kategori = Kategori::findOrFail($id);
            $kategori->delete();
            return redirect()->route('kategori')->with('success', 'Kategori Berhasil Dihapus');
        } catch (\Exception $e) {
            if ($e->getCode() == 23000) {
                return redirect()->route('kategori')->with('error', 'Kategori tidak dapat dihapus karena sedang digunakan oleh data lain. Silahkan hapus data yang terkait dengan kategori ini terlebih dahulu!.');
            }
            return redirect()->route('kategori')->with('error', 'Kategori Gagal Dihapus: ' . $e->getMessage());
        }
    }
}
