<?php

namespace App\Http\Controllers;

use App\Models\Nuts;
use App\Models\Seeds;
use App\Models\Produk;
use App\Models\Spices;
use Illuminate\Http\Request;
use App\Models\SpecialProduct;
use Illuminate\Support\Facades\DB;

class ListBarangUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::all();
        $latestProducts = $produk->sortByDesc('created_at')->take(6); // Ambil 6 produk terbaru
        return view('user.list_barang_user', compact('produk', 'latestProducts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Produk::findOrFail($id);
        $relatedProducts = Produk::where('kategori_id', $product->kategori_id)->where('id', '!=', $product->id)->get();
        return view('user.detialproduk', compact('product', 'relatedProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
