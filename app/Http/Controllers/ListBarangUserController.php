<?php

namespace App\Http\Controllers;

use App\Models\Nuts;
use App\Models\Seeds;
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
        $products = Spices::query()
            ->select('id', 'nama_produk', 'foto_produk', 'harga', DB::raw("'spices' as type"))
            ->union(
                Seeds::query()->select('id', 'nama_produk', 'foto_produk', 'harga', DB::raw("'seeds' as type"))
            )
            ->union(
                Nuts::query()->select('id', 'nama_produk', 'foto_produk', 'harga', DB::raw("'nuts' as type"))
            )
            ->union(
                SpecialProduct::query()->select('id', 'nama_produk', 'foto_produk', 'harga', DB::raw("'special_product' as type"))
            )
            ->get();

        $latestProducts = $products->sortByDesc('created_at')->take(6); // Ambil 6 produk terbaru
        $latestProducts = $products->sortByDesc('id')->take(6);
        return view('user.list_barang_user', compact('products', 'latestProducts'));
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
        // Cari produk berdasarkan ID dari masing-masing tabel
        $spices = Spices::query()
            ->select('id', 'nama_produk', 'foto_produk', 'harga', 'deskripsi', DB::raw("'spices' as type"))
            ->where('id', $id) // Menambahkan kondisi untuk mencari berdasarkan ID
            ->first();
    
        $seeds = Seeds::query()
            ->select('id', 'nama_produk', 'foto_produk', 'harga', 'deskripsi', DB::raw("'seeds' as type"))
            ->where('id', $id) // Menambahkan kondisi untuk mencari berdasarkan ID
            ->first();
    
        $nuts = Nuts::query()
            ->select('id', 'nama_produk', 'foto_produk', 'harga', 'deskripsi', DB::raw("'nuts' as type"))
            ->where('id', $id) // Menambahkan kondisi untuk mencari berdasarkan ID
            ->first();
    
        $specialProduct = SpecialProduct::query()
            ->select('id', 'nama_produk', 'foto_produk', 'harga', 'deskripsi', DB::raw("'special_product' as type"))
            ->where('id', $id) // Menambahkan kondisi untuk mencari berdasarkan ID
            ->first();
    
        // Gabungkan produk yang ditemukan
        $product = $spices ?? $seeds ?? $nuts ?? $specialProduct; // Menggunakan ?? untuk memeriksa data yang ditemukan
    
        // Pastikan ada produk yang ditemukan
        if (!$product) {
            abort(404, 'Produk tidak ditemukan');
        }
    
        return view('user.detialproduk', compact('product'));
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
