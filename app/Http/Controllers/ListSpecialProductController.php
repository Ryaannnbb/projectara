<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpecialProduct;

class ListSpecialProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialProducts = SpecialProduct::all();
        $latestSpecialProducts = $specialProducts->sortByDesc('created_at')->take(6);
        return view('user.special_product_list', compact('specialProducts', 'latestSpecialProducts'));
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
        $specialProduct = SpecialProduct::findOrFail($id);
        $relatedSpecialProducts = SpecialProduct::where('kategori_id', $specialProduct->kategori_id)->where('id', '!=', $specialProduct->id)->get();
        return view('user.detail_special_product', compact('specialProduct', 'relatedSpecialProducts'));
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
