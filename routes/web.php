<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CheckoutController;

// Rute untuk otentikasi (login dan register)
Route::get('/login', function () {
    return view('login');
})->name('login.view');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Rute untuk produk
Route::get('/produks', [ProdukController::class, 'index']);
Route::get('/produks/{id_produk}', [ProdukController::class, 'show']);

// Rute untuk checkouts
Route::get('/checkouts', [CheckoutController::class, 'index']);
Route::get('/checkouts/{id_transaksi}', [CheckoutController::class, 'show']);
Route::post('/checkouts', [CheckoutController::class, 'store']);
Route::delete('/checkouts/{id_transaksi}', [CheckoutController::class, 'destroy']);

// Rute lainnya
Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/detailproduk', function () {
    return view('detailproduk');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/landingpage', function () {
    return view('landingpage');
});
