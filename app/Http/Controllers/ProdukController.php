<?php

namespace App\Http\Controllers;

use App\Models\Produks; // Import model Produks
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produks = Produks::all(); // Mendapatkan semua data produk dari tabel 'produks'
        return view('produk.index', ['produks' => $produks]);
    }

    public function show($id)
    {
        $produk = Produks::find($id); // Mendapatkan data produk berdasarkan ID
        return view('detailproduk', ['produk' => $produk]); // Mengarahkan ke view 'detailproduk'
    }

    public function create()
    {
        return view('produk.create'); // Tampilkan view untuk formulir tambah produk
    }

    public function store(Request $request)
    {
        // Lakukan validasi data yang diterima dari formulir tambah produk
        $validatedData = $request->validate([
            'nama_produk' => 'required',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data ke database
        Produk::create($validatedData);

        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan'); // Redirect ke halaman produk setelah penyimpanan berhasil
    }

    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect('/produk')->with('success', 'Produk berhasil dihapus'); // Redirect ke halaman produk setelah penghapusan berhasil
    }

    // Metode lain seperti update(), edit(), dll.
}
