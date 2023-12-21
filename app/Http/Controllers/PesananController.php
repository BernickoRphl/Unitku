<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function add_form()
    {
        $pesanans = Pesanan::all();
        $product = product::all(); // Adjust this based on your model and database structure

        return view('pesanan_add', compact('pesanans', 'product'));
    }

    public function create(Request $request)
{
    $user = auth()->user();

    $pesanan = $user->pesanans()->create([
        'tanggal_pemesanan' => $request->tanggal_pemesanan,
        'description' => $request->description,
    ]);
    if ($request->details) {
        foreach ($request->details as $detail) {
        $pesanan->detailPesanans()->create([
            'jumlah' => $detail['jumlah'],
            'product_id' => $detail['product_id'],
        ]);
    }
    }

    return redirect()->route('pesanan.list')->with('success', 'Pesanan created successfully');
}


    public function show_pesanan(Pesanan $pesanan)
    {
        return view('pesanan.list', compact('pesanan'));
    }

    public function edit(Pesanan $pesanan)
    {
        return view('pesanans.edit', compact('pesanan'));
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        $pesanan->update([
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'description' => $request->description,
        ]);

        // Handle details update if needed

        return redirect()->route('pesanans.index')->with('success', 'Pesanan updated successfully');
    }

    public function delete(Pesanan $pesanan)
    {
        $pesanan->delete();

        return redirect()->route('pesanans.index')->with('success', 'Pesanan deleted successfully');
    }


    public function listPesananUser()
    {
        // Get the authenticated user's orders
        $user = Auth::user();
        $pesanan = Pesanan::where('user_id', $user->id)->get();

        return view('pesanan_index', compact('pesanan'));
    }
}
