<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $table = 'checkouts'; // Sesuaikan dengan nama tabel yang sesuai

    protected $primaryKey = 'id_transaksi'; // Sesuaikan dengan nama primary key

    protected $fillable = [
        'id_produk',
        'id_user',
        'nama_produk',
        'deskripsi_produk',
        'image_produk',
        'harga_produk',
        'tanggal_transaksi',
        'create_at',
    ]; // Tentukan kolom yang dapat diisi
}
