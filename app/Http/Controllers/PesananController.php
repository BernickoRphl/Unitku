<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\product;
use App\Models\status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananController extends Controller
{
    public function add_form()
    {
        $product = product::all();
        $currentDate = now()->toDateString();

        return view('pesanan_add', compact('product', 'currentDate'));
    }

    public function create(Request $request)
    {
        $user = auth()->user();

        $product = $request->product_id;

        foreach ($product as $product) {
            $pesanan = $user->pesanans()->create([
                'tanggal_pemesanan' => now()->toDateString(),
                'address' => $request->address,
                'description' => $request->description,
                'jumlah' => $request->jumlah,
                'status_id' => $request->status_id,
                'product_id' => $product,

            ]);
        }

        $pesanan->products()->sync($request->product_id);

        return redirect()->route('pesanan.index')->with('success', 'Pesanan created successfully');
    }

    public function show_all_pesanan(Pesanan $pesanan)
    {
        $product = product::all();
        $detail = DetailPesanan::all();
        $user = User::all();
        $pesanan = Pesanan::all();
        return view('pesanan_list', compact('pesanan', 'user', 'detail', 'product'));
    }

    public function edit(Pesanan $pesanan)
    {
        $status = status::all();
        $detail = DetailPesanan::all();
        $user = User::all();
        $pesananEdit = Pesanan::where('id', $pesanan->id)->first();
        return view('pesanan_edit', compact('pesananEdit', 'user', 'detail', 'status'));
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        $pesanan->update([
            'address' => $request->address,
            'description' => $request->description,
            'jumlah' => $request->jumlah,
            'status_id' => $request->status ?? $pesanan->status, // Use the existing value if not provided
            'product_id' => $request->products,
        ]);
        return redirect()->route('pesanan.list')->with('success', 'Pesanan updated successfully');
    }

    public function delete(Pesanan $pesanan)
    {
        $pesanan->delete();

        return redirect()->route('pesanan.list')->with('success', 'Pesanan deleted successfully');
    }


    public function listPesananUser()
    {
        $user = Auth::user();
        $pesanan = Pesanan::where('user_id', $user->id)->get();
        $pesanans = Pesanan::class;
        $product = product::class;

        return view('pesanan_index', compact('pesanan'));
    }
}
