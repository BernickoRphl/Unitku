<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\product;
use App\Models\Review;
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
        // dd($_POST);
        $user = auth()->user();
        $productIds = $request->product_id;

        $productImage = $request->file('image')->store('images', ['disk' => 'public']);


        foreach ($productIds as $productId) {
            $pesanan = $user->pesanans()->create([
                'tanggal_pemesanan' => now()->toDateString(),
                'address' => $request->address,
                'description' => $request->description,
                'jumlah' => $request->jumlah,
                'image' => $productImage,
                'status_id' => $request->status_id,
                'product_id' => $productId,
                'review_id' => $request->review_id,
            ]);
        }

        $pesanan->products()->sync($productIds);

        return redirect()->route('pesanan.index')->with('success', 'Pesanan created successfully');
    }


    public function show_all_pesanan(Pesanan $pesanan)
    {
        $product = product::all();
        $detail = DetailPesanan::all();
        $user = User::all();
        $pesanan = Pesanan::all();
        $review = Review::all();

        return view('pesanan_list', compact('pesanan', 'user', 'detail', 'product', 'review'));
    }

    public function edit(Pesanan $pesanan)
    {
        $status = status::all();
        $detail = DetailPesanan::all();
        $user = User::all();
        $product = product::all();
        $review = Review::all();

        $pesananEdit = Pesanan::where('id', $pesanan->id)->first();

        return view('pesanan_edit', compact('pesananEdit', 'user', 'detail', 'status', 'product', 'review'));
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        $productImage = $request->file('image');

        // Cek apakah ada gambar baru yang diunggah
        if ($productImage) {
            $productImage = $productImage->store('images', ['disk' => 'public']);
        } else {
            // Jika tidak ada gambar baru, gunakan gambar yang sudah ada
            $productImage = $pesanan->image;
        }

        $pesanan->update([
            'address' => $request->address,
            'description' => $request->description,
            'jumlah' => $request->jumlah,
            'image' => $productImage,
            'status_id' => $request->status ?? $pesanan->status,
            'product_id' => $request->products ?? $pesanan->product_id,
            'review_id' => $request->review_id ?? $pesanan->review_id,
        ]);


        return redirect()->route('pesanan.list')->with('success', 'Pesanan updated successfully');
    }

    public function editReview(Pesanan $pesanan)
    {
        $status = status::all();
        $detail = DetailPesanan::all();
        $user = User::all();
        $product = product::all();
        $review = Review::all();

        $pesananEdit = Pesanan::where('id', $pesanan->id)->first();

        return view('review_add', compact('pesananEdit', 'user', 'detail', 'status', 'product', 'review'));
    }

    public function updateReview(Request $request, Pesanan $pesanan)
    {
        $pesanan->update([
            'review_id' => $request->review_id ?? $pesanan->review_id,
        ]);

        return redirect()->route('pesanan.index')->with('success', 'Pesanan updated successfully');
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
        $review = Review::all();

        return view('pesanan_index', compact('pesanan'));
    }
}
