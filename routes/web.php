<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeedsController;
use App\Http\Controllers\SpicesController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\NutsController;
use App\Http\Controllers\SpecialProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.detailbarang');
});

Route::controller(SpicesController::class)->prefix('spices')->group(function () {
    Route::get('/', 'index')->name('spices');
    Route::get('/create', 'create')->name('spices.create');
    Route::post('/store', 'store')->name('spices.store');
    Route::get('edit/{id}', 'edit')->name('spices.edit');
    Route::put('update/{id}', 'update')->name('spices.update');
    Route::delete('delete/{id}', 'destroy')->name('spices.destroy');
});

Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
    Route::get('/', 'index')->name('kategori');
    Route::get('/create', 'create')->name('kategori.create');
    Route::post('/store', 'store')->name('kategori.store');
    Route::get('edit/{id}', 'edit')->name('kategori.edit');
    Route::put('update/{id}', 'update')->name('kategori.update');
    Route::delete('delete/{id}', 'destroy')->name('kategori.destroy');
});

Route::controller(SeedsController::class)->prefix('seeds')->group(function () {
    Route::get('/', 'index')->name('seeds');
    Route::get('/create', 'create')->name('seeds.create');
    Route::post('/store', 'store')->name('seeds.store');
    Route::get('edit/{id}', 'edit')->name('seeds.edit');
    Route::put('update/{id}', 'update')->name('seeds.update');
    Route::delete('delete/{id}', 'destroy')->name('seeds.destroy');
});

Route::controller(NutsController::class)->prefix('nuts')->group(function () {
    Route::get('/', 'index')->name('nuts');
    Route::get('/create', 'create')->name('nuts.create');
    Route::post('/store', 'store')->name('nuts.store');
    Route::get('edit/{id}', 'edit')->name('nuts.edit');
    Route::put('update/{id}', 'update')->name('nuts.update');
    Route::delete('delete/{id}', 'destroy')->name('nuts.destroy');
});

Route::controller(SpecialProductController::class)->prefix('special_products')->group(function () {
    Route::get('/', 'index')->name('special_products');
    Route::get('/create', 'create')->name('special_products.create');
    Route::post('/store', 'store')->name('special_products.store');
    Route::get('edit/{id}', 'edit')->name('special_products.edit');
    Route::put('update/{id}', 'update')->name('special_products.update');
    Route::delete('delete/{id}', 'destroy')->name('special_products.destroy');
});
