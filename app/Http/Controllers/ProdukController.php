<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.produk.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'kategori_id' => 'required|integer|exists:kategoris,id',
            'foto_produk' => 'required|image|mimes:jpeg,png,jpg,svg|max:20048',
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'berat' => 'required|integer|min:0',
            'deskripsi' => 'required',
        ], [
            'kategori_id.required' => 'Kategori harus diisi.',
            'kategori_id.integer' => 'Kategori harus berupa angka.',
            'kategori_id.exists' => 'Kategori tidak valid.',
            'foto_produk.required' => 'Foto produk harus diisi.',
            'foto_produk.image' => 'Foto produk harus berupa gambar.',
            'foto_produk.mimes' => 'Foto produk harus berformat jpeg, png, jpg, atau svg.',
            'foto_produk.max' => 'Foto produk maksimal berukuran 20 MB.',
            'nama_produk.required' => 'Nama produk harus diisi.',
            'nama_produk.string' => 'Nama produk harus berupa string.',
            'nama_produk.max' => 'Nama produk maksimal 255 karakter.',
            'harga.required' => 'Harga harus diisi.',
            'harga.integer' => 'Harga harus berupa angka.',
            'harga.min' => 'Harga tidak boleh negatif.',
            'berat.required' => 'Berat harus diisi.',
            'berat.integer' => 'Berat harus berupa angka.',
            'berat.min' => 'Berat tidak boleh negatif.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
        ]);

        $file = $request->file('foto_produk');
        $fileName = Str::random(10) . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('storage/product'), $fileName);

        Produk::create([
            'kategori_id' => $request->kategori_id,
            'foto_produk' => $fileName,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'berat' => $request->berat,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('produk')->with('success', 'Produk Berhasil Ditambah');
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
        $produk = Produk::find($id);
        $kategori = Kategori::all();
        return view('admin.produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori_id' => 'required|integer|exists:kategoris,id',
            'foto_produk' => 'image|mimes:jpeg,png,jpg,svg|max:20048',
            'nama_produk' => 'required|string|max:255',
            'harga' => 'required|integer|min:0',
            'berat' => 'required|integer|min:0',
            'deskripsi' => 'required',
        ], [
            'kategori_id.required' => 'Kategori harus diisi.',
            'kategori_id.integer' => 'Kategori harus berupa angka.',
            'kategori_id.exists' => 'Kategori tidak valid.',
            'foto_produk.image' => 'Foto produk harus berupa gambar.',
            'foto_produk.mimes' => 'Foto produk harus berformat jpeg, png, jpg, atau svg.',
            'foto_produk.max' => 'Foto produk maksimal berukuran 20 MB.',
            'nama_produk.required' => 'Nama produk harus diisi.',
            'nama_produk.string' => 'Nama produk harus berupa string.',
            'nama_produk.max' => 'Nama produk maksimal 255 karakter.',
            'harga.required' => 'Harga harus diisi.',
            'harga.integer' => 'Harga harus berupa angka.',
            'harga.min' => 'Harga tidak boleh negatif.',
            'berat.required' => 'Berat harus diisi.',
            'berat.integer' => 'Berat harus berupa angka.',
            'berat.min' => 'Berat tidak boleh negatif.',
            'deskripsi.required' => 'Deskripsi harus diisi.',
        ]);

        $produk = Produk::findOrFail($id);

        if ($request->hasFile('foto_produk')) {
            if (file_exists(public_path('storage/product/' . $produk->foto_produk))) {
                unlink(public_path('storage/product/' . $produk->foto_produk));
            }

            $file = $request->file('foto_produk');
            $fileName = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/product'), $fileName);
            $produk->foto_produk = $fileName;
        }

        $produk->update([
            'kategori_id' => $request->kategori_id,
            'foto_produk' => $fileName,
            'nama_produk' => $request->nama_produk,
            'harga' => $request->harga,
            'berat' => $request->berat,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('produk')->with('success', 'Produk Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);

        if (file_exists(public_path('storage/product/' . $produk->foto_produk))) {
            unlink(public_path('storage/product/' . $produk->foto_produk));
        }

        $produk->delete();

        return redirect()->route('produk')->with('success', 'Produk Berhasil Dihapus');
    }
}
