<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function add_form()
    {
        $pesanans = Pesanan::all();
        $product = product::all(); // Adjust this based on your model and database structure
        $currentDate = now()->toDateString(); // Get the current date

        return view('pesanan_add', compact('pesanans', 'product', 'currentDate'));
    }

    public function create(Request $request)
    {
        $user = auth()->user();

        $statusId = 1; // Set the default status ID here

        // Only allow admin to change the status later
        if ($user->isAdmin()) {
            $statusId = $request->status_id;
        }

        $pesanan = $user->pesanans()->create([
            'tanggal_pemesanan' => now()->toDateString(),
            'address' => $request->address,
            'description' => $request->description,
            'status_id' => $statusId,
        ]);

        if ($request->details) {
            foreach ($request->details as $detail) {
                $pesanan->detailPesanans()->create([
                    'jumlah' => $detail['jumlah'],
                    'product_id' => $detail['product_id'],
                ]);
            }
        }

        return redirect()->route('pesanan.index')->with('success', 'Pesanan created successfully');
    }

    public function show_all_pesanan(Pesanan $pesanan)
    {
        $user = User::all();
        $pesanans = Pesanan::all();
        return view('pesanan_list', compact('pesanans', 'user'));
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
