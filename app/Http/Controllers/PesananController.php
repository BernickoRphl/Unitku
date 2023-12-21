<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\DetailPesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function add_form()
    {
        $pesanans = Pesanan::all();

        return view('pesanans.list', compact('pesanans'));
    }

    public function create(Request $request)
    {
        $pesanan = Pesanan::create([
            'user_id' => auth()->id(),
            'tanggal_pemesanan' => $request->tanggal_pemesanan,
            'description' => $request->description,
        ]);

        foreach ($request->details as $detail) {
            $pesanan->detailPesanans()->create([
                'jumlah' => $detail['jumlah'],
                'product_id' => $detail['product_id'],
            ]);
        }

        return redirect()->route('pesanans.index')->with('success', 'Pesanan created successfully');
    }

    public function show_pesanan(Pesanan $pesanan)
    {
        return view('pesanans.list', compact('pesanan'));
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

        return redirect()->route('pesanans.list')->with('success', 'Pesanan updated successfully');
    }

    public function delete(Pesanan $pesanan)
    {
        $pesanan->delete();

        return redirect()->route('pesanans.list')->with('success', 'Pesanan deleted successfully');
    }


    public function listPesananUser()
    {
        // Get the authenticated user's orders
        $user = Auth::user();
        $pesanan = Pesanan::where('user_id', $user->id)->get();

        return view('pesanan_index', compact('pesanan'));
    }
}
