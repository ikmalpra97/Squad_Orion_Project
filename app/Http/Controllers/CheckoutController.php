<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Checkouts;

class CheckoutController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::all(); // Ambil semua data dari tabel checkouts
        return view('checkout.index', ['checkouts' => $checkouts]);
    }

    public function show($id)
    {
        $checkout = Checkout::find($id); // Ambil data checkout berdasarkan ID
        return view('checkout.detail', ['checkout' => $checkout]);
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'id_produk' => 'required',
            'id_user' => 'required',
            // Sesuaikan aturan validasi dengan kebutuhan
        ]);

        // Simpan data ke dalam tabel checkouts
        Checkout::create($validatedData);

        // Redirect atau lakukan sesuai kebutuhan setelah penyimpanan berhasil
        return redirect('/checkouts')->with('success', 'Data checkout berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $checkout = Checkout::findOrFail($id); // Cari data checkout berdasarkan ID
        $checkout->delete(); // Hapus data

        // Redirect atau lakukan sesuai kebutuhan setelah penghapusan berhasil
        return redirect('/checkouts')->with('success', 'Data checkout berhasil dihapus');
    }

    // Metode lain seperti update(), edit(), dll.
}
