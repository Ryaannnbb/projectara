<?php

use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NutsController;
use App\Http\Controllers\SeedsController;
use App\Http\Controllers\SpicesController;
use App\Http\Middleware\RedirectMiddleware;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ListBarangUserController;
use App\Http\Controllers\ListSpecialProductController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\SpecialProductController;
use App\Http\Controllers\StoreLocationsController;
use App\Http\Middleware\AdminMiddleware;

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


Route::middleware([RedirectMiddleware::class])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/postlogin', 'postlogin')->name('postlogin');
        Route::get('/logout', 'logout')->name('logout');
    });
});

Route::controller(ListBarangUserController::class)->prefix('shop')->group(function () {
    Route::get('/', 'index')->name('shop');
    Route::get('/{id}', 'show')->name('shop.show');
});

Route::controller(ListSpecialProductController::class)->prefix('special_product')->group(function () {
    Route::get('/', 'index')->name('special_product_list');
    Route::get('/{id}', 'show')->name('special_product_list.show');
});

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::controller(ProdukController::class)->prefix('produk')->group(function () {
        Route::get('/', 'index')->name('produk');
        Route::get('/create', 'create')->name('produk.create');
        Route::post('/store', 'store')->name('produk.store');
        Route::get('edit/{id}', 'edit')->name('produk.edit');
        Route::put('update/{id}', 'update')->name('produk.update');
        Route::delete('delete/{id}', 'destroy')->name('produk.destroy');
    });

    Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
        Route::get('/', 'index')->name('kategori');
        Route::get('/create', 'create')->name('kategori.create');
        Route::post('/store', 'store')->name('kategori.store');
        Route::get('edit/{id}', 'edit')->name('kategori.edit');
        Route::put('update/{id}', 'update')->name('kategori.update');
        Route::delete('delete/{id}', 'destroy')->name('kategori.destroy');
    });

    Route::controller(SpecialProductController::class)->prefix('special_products')->group(function () {
        Route::get('/', 'index')->name('special_products');
        Route::get('/create', 'create')->name('special_products.create');
        Route::post('/store', 'store')->name('special_products.store');
        Route::get('edit/{id}', 'edit')->name('special_products.edit');
        Route::put('update/{id}', 'update')->name('special_products.update');
        Route::delete('delete/{id}', 'destroy')->name('special_products.destroy');
    });

    Route::controller(StoreLocationsController::class)->prefix('store_locations')->group(function () {
        Route::get('/', 'index')->name('store_locations');
        Route::get('/create', 'create')->name('store_locations.create');
        Route::post('/store', 'store')->name('store_locations.store');
        Route::get('edit/{id}', 'edit')->name('store_locations.edit');
        Route::put('update/{id}', 'update')->name('store_locations.update');
        Route::delete('delete/{id}', 'destroy')->name('store_locations.destroy');
    });
});
