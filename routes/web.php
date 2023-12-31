<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CheckoutController;

// Rute untuk otentikasi (login dan register)


Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

// Rute untuk produk
Route::get('/produks', [ProdukController::class, 'index']);
Route::get('/produks/{id_produk}', [ProdukController::class, 'show']);

// Rute untuk checkouts
Route::get('/checkouts', [CheckoutController::class, 'index']);
Route::get('/checkouts/{id_transaksi}', [CheckoutController::class, 'show']);
Route::post('/checkouts', [CheckoutController::class, 'store']);
Route::delete('/checkouts/{id_transaksi}', [CheckoutController::class, 'destroy']);

//Rute untuk admin dashboard
Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware('auth');

// Rute lainnya
Route::get('/', function () {
    return view('home' , [
        "title" => "Home",
        'active' => 'home'
    ]);
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
    return view('about', [
        "title" => "about",
        "active" => 'about'
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/admin', function () {
//     return view('admin');
// });