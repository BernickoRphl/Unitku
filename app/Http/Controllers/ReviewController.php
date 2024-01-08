<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function create(Pesanan $pesanan)
    {
        return view('review_add', compact('pesanan'));
    }

    public function store(Request $request, Pesanan $pesanan)
    {


        Review::create([
            'description' => $request->input('description'),
            'pesanan_id' => $pesanan->id,
        ]);

        return redirect()->route('pesanan.index'); // Adjust this to the desired route
    }
}
