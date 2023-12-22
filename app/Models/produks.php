<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks'; // Nama tabel dalam database
    protected $primaryKey = 'id_produk'; // Primary key dari tabel
    public $timestamps = false; // Jika tidak menggunakan kolom timestamps

    protected $fillable = [
        'nama_produk',
        'deskripsi_produk',
        'image_produk',
        'rating_produk',
        'harga_produk',
        'stok_barang',
        'created_at',
        'updated_at',
    ];

    // ... (Method atau relasi lain jika diperlukan)
}
