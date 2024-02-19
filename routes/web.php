<?php

use App\Models\Barang;
use App\Models\Rekening;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/produk', function () {
    $barang = Barang::all();
    return view('produk', compact('barang'));
});

Route::get('/detail-produk/{id}', function ($id) {
    $barang = Barang::findOrFail($id);
    return view('detail-produk', compact('barang'));
})->name('detail-produk');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $userCount = User::count();
        $barangCount = Barang::count();
        $rekeningCount = Rekening::count();
        return view('dashboard', compact('userCount', 'barangCount', 'rekeningCount'));
    })->name('dashboard');

    Route::get('/permissions', function () {
        return view('permissions');
    })->name('permissions');

    Route::get('/roles', function () {
        return view('roles');
    })->name('roles');

    Route::get('/users', function () {
        return view('users');
    })->name('users');

    Route::get('/barang', function () {
        return view('barang');
    })->name('barang');

    Route::get('/detailpembeli', function () {
        return view('detailpembeli');
    })->name('detailpembeli');

    Route::get('/pembayaran', function () {
        return view('pembayaran');
    })->name('pembayaran');

    Route::get('/rekening', function () {
        return view('rekening');
    })->name('rekening');

    Route::get('/transaksi', function () {
        return view('transaksi');
    })->name('transaksi');

    Route::get('/keranjang', function () {
        return view('keranjang');
    })->name('keranjang');
});
